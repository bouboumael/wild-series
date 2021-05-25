<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }


    /**
     * @Route("/new", name="new")
     *
     * @return Response
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('category_index');
        }
        return $this->render('category/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{categoryName}", name="show")
     *
     * @param string $categoryName
     * @return Response
     */
    public function show(string $categoryName): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy([
                'name' => $categoryName
            ]);

            if (!$category) {
                throw $this->createNotFoundException(
                    'No category with name : ' . $categoryName . ' found in category\'s table.'
                );
            }

            $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy([
                    'category' => $category->getId()
                ],
            [
                'id' => 'DESC'
            ],
        3);
        return $this->render('category/show.html.twig', [
            'programs' => $programs,
        ]);
    }
}

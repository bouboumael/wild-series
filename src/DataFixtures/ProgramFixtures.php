<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\service\Slugify;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        'La guerre des wilders' => [
            'summary' => 'Des astronomes détectent une transmission émanant d’une autre galaxie, preuve de l\'existence d\'une vie extra-terrestre intelligente. Quelques jours plus tard, l\'humanité est détruite ; seule survit une poignée d\'êtres humains qui comprendra bientôt les mystères cachés derrière cette invasion...
            LE TEASER STREAMING DVD
            ',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/10/11/17/18/4361049.jpg',
            'country' => 'France',
            'year' => '2021',
            'category' => 'Fantastique'
        ],
        'HPI' => [
            'summary' => 'Notre Wilder de 160 de QI va voir son destin chamboulé lorsque ses capacités hors norme sont repérées par la police qui lui propose un poste. Problème : ce wilder déteste les flics !',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/21/04/07/11/14/5145026.jpg',
            'country' => 'France',
            'year' => '2021',
            'category' => 'Action'
        ],
        'Wilders The Reunion' => [
            'summary' => 'Les Wilder Jumanji sont de retour sur le plateau mythique de la session - le lab\'o pour une émission spéciale consacrée à la session tant aimée.',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/21/05/27/09/52/4521990.jpg',
            'country' => 'France',
            'year' => '2021',
            'category' => 'Humour'
        ],
        'Wilder s Legacy' => [
            'summary' => 'Wilder\'s Legacy est une épopée super-héroïque multigénérationnelle qui suit la première génération de super-codeurs au monde à avoir reçu leurs pouvoirs dans les années 2020.',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/21/04/15/12/13/2688584.jpg',
            'country' => 'France',
            'year' => '2021',
            'category' => 'Fantastique'
        ],
        'Lucyfer-Wilder' => [
            'summary' => 'Lucyfer Morningstar, plus connue sous le nom de Seigneur des Enfers, a renoncé à son trône pour rejoindre le monde des vivants. Désormais propriétaire d\'un nightclub à Orléans, elle va bientôt croiser la route des Wilders dont la bonté est à l\'opposé de tout ce qu\'elle incarne.',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/15/11/10/13/35/055302.jpg',
            'country' => 'France',
            'year' => '2021',
            'category' => 'Horeur'
        ],

    ];

    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAMS as $title => $description) {
            $program = new Program();
            $program->setTitle($title);
            $program->setSummary($description['summary']);
            $program->setPoster($description['poster']);
            $program->setYear($description['year']);
            $program->setCountry($description['country']);
            $program->setCategory($this->getReference('category_' . $description['category']));
            for ($i=0; $i < count(ActorFixtures::ACTORS); $i++) {
                $program->addActor($this->getReference('actor_' . $i));
            }
            $program->setSlug($this->slugify->generate($program->getTitle()));
            $manager->persist($program);
            $this->addReference('program_' . $title, $program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
            CategoryFixtures::class,
        ];
    }


}

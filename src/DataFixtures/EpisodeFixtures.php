<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    const EPISODES = [
        [
            'title' => "Le début",
            'number' => 1,
            'synopsis' => 'Il y a un début à tout',
        ],
        [
            'title' => "Le deuxième",
            'number' => 2,
            'synopsis' => 'Faut bien une suite au premier',
        ],
        [
            'title' => "One two tree",
            'number' => 3,
            'synopsis' => 'pas d\'inspi',
        ],
        [
            'title' => "Bon ca se termine",
            'number' => 4,
            'synopsis' => 'Ca commence à être long',
        ],
        [
            'title' => "La fin",
            'number' => 5,
            'synopsis' => 'Pause enfin :)',
        ],
    ];

    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (ProgramFixtures::PROGRAMS as $programTitle => $programDescription) {
            foreach (SeasonFixtures::SAISONS as $seasonTitle => $seasonDescription) {
                foreach (self::EPISODES as $number => $episodeDescription) {
                    $episode = new Episode();
                    $episode->setTitle($episodeDescription['title']);
                    $episode->setSlug($this->slugify->generate($seasonTitle . '-' . $programTitle .'-' . $episode->getTitle()));
                    $episode->setNumber($episodeDescription['number']);
                    $episode->setSynopsis($episodeDescription['synopsis']);
                    $episode->setSeason($this->getReference('season_'. $programTitle . '_' . $seasonTitle));
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}

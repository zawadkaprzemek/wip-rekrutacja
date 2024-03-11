<?php

namespace App\DataFixtures;

use App\Entity\Position;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PositionFixture extends Fixture
{
    const POSTITIONS = ['tester', 'developer', 'project manager'];
    const SLUGS = ['tester', 'developer', 'projectManager'];

    public function load(ObjectManager $manager): void
    {
        foreach (self::POSTITIONS as $key=> $positionName) {
            $position = new Position();
            $position->setName($positionName);
            $position->setSlug(self::SLUGS[$key]);
            $manager->persist($position);
        }

        $manager->flush();
    }

}

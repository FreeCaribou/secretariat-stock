<?php

namespace App\DataFixtures;

use App\Entity\StoredThing;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $thing = new StoredThing();
        $thing->setLabel('Flag');
        $thing->setDescription('The red flag');
        $thing->setBaseAmount(5);
        $manager->persist($thing);

        $thing = new StoredThing();
        $thing->setLabel('Big table');
        $thing->setBaseAmount(9);
        $manager->persist($thing);

        $manager->flush();
    }
}
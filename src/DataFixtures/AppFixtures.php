<?php

namespace App\DataFixtures;

use App\Factory\Carfactory;
use App\Factory\Motofactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        Carfactory::createMany(10);
        Motofactory::createMany(10);   // $manager->persist($product);
        $manager->flush();
    }
}

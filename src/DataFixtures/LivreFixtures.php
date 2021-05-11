<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Livre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 20 ; $i++) { 
            $faker = Factory::create();
            $livre = new Livre();
            $livre->setAuteur($faker->name);
            $livre->setTitre('titre'.$i);
            $manager->persist($livre);
        }

        $manager->flush();
    }
}

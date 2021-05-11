<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $livre = new Livre();
        for ($i=0; $i < 20 ; $i++) { 
            $livre->setAuteur("auteu".$i);
            $livre->setTitre('titre'.$i);
            $manager->persist($livre);
        }

        $manager->flush();
    }
}

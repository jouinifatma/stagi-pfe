<?php

namespace App\DataFixtures;

use App\Entity\Offer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OfferFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++) {
            $Offer = new Offer();
            $Offer->setTitle("le titre de $i")
                 ->setDescription(" le description de $i")
                 ->setStartAt(new \DateTime())
                 ->setEndAt(new \DateTime())
                 ->setLimitAt(new \DateTime())
                 ->setAddress("l'adresse de $i")
                 ->setCity("le city de $i")
                 ->setPostalCode($i)
                 ->setCreatedAt(new \DateTime())
                 ->setStatus("statut de $i")
                 ->setCreatedBy($i);
                 
  
            $manager->persist($Offer);     
  
          }
        $manager->flush();
    }
}

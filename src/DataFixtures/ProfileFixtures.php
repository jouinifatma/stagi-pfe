<?php

namespace App\DataFixtures;
use App\Entity\Profile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProfileFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++) {
            $Profil = new Profile();
            $Profil->setCompany("la company de $i")
                 ->setPhone($i)
                 ->setMobile($i)
                 ->setAddress("l'adresse de $i")
                 ->setCity("le city de $i")
                 ->setPostalCode($i)
                 ->setType("le type de $i")
                 ->setBio("le bio de $i")
                 ->setLogo("le logo de $i")
                 ->setActivity("l'activité de $i")
                 ->setWebSite("le site web de $i")
                 ->setCreatedAt(new \DateTime())
                 ->setUserId($i);
                 
  
            $manager->persist($Profil);     
  
          }
          

        $manager->flush();
    }
}

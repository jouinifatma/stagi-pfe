<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++) {
            $Comment = new Comment();
            $Comment->setContent("le titre de $i")
                 ->setDemandeId($i)
                 ->setCreatedBy($i);
                 
  
            $manager->persist($Comment);     
  
          }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Feedback;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FeedbackFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++) {
            $Feedback = new Feedback();
            $Feedback->setNote($i)
                 ->setComment(" le commantaire de $i")
                 ->setCreatedBy($i);
                 
  
            $manager->persist($Feedback);     
  
          }
        $manager->flush();
    }
}

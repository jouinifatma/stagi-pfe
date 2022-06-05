<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillFixutres extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++) {
            $skill = new Skill();
            $skill->setLangage(array('Français','Anglais','Arabe'))
                 ->setExperience(array('exp1','exp2','exp3'))
                 ->setInterestCenter(array('ic1','ic2','ic3'))
                 ->setTechKnew(array('tn1','tn2','tn3'))
                 ->setProTr(array('tr1','tr2','tr3'))
                 ->setUserId($i);
  
            $manager->persist($skill);     
  
          }

        $manager->flush();
    }
}

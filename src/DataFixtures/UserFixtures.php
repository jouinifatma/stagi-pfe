<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        
          $user = new User();
          $user->setEmail('user@user.com')->setFullName('fatma jouini');
          
         $user->setPassword($this->passwordHasher->hashPassword($user, 'password'));
        
              

          $manager->persist($user);     

        
        

        $manager->flush(); 
    }
}

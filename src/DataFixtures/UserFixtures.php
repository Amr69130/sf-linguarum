<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // 1 ADMIN qui gere le crud
        $admin = new User();
        $admin->setFirstname('admin');
        $admin->setLastname('ADMIN');
        $admin->setEmail('admin@example.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'adminpassword'));
        $manager->persist($admin);

        // 1 USER crée manuellement
        $user1 = new User();
        $user1->setFirstname('user1');
        $user1->setLastname('USER1');
        $user1->setEmail('user1@example.com');
        $user1->setRoles(['ROLE_USER']);
        $user1->setPassword($this->passwordHasher->hashPassword($user1, 'user1password'));
        $manager->persist($user1);

        // 1 deuxième USER crée manuellement

        $user2 = new User();
        $user2->setFirstname('user2');
        $user2->setLastname('USER2');
        $user2->setEmail('user2@example.com');
        $user2->setRoles(['ROLE_USER']);
        $user2->setPassword($this->passwordHasher->hashPassword($user2, 'user2password'));
        $manager->persist($user2);


        // 10 USERS crées avec Faker
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $fakeUser = new User();
            $fakeUser->setFirstname($faker->firstName());
            $fakeUser->setLastname($faker->lastName());

            $fakeUser->setEmail($faker->unique()->email());
            $fakeUser->setRoles(['ROLE_USER']);
            $fakeUser->setPassword($this->passwordHasher->hashPassword($fakeUser, 'fakeuserpassword'));
            $manager->persist($fakeUser);
        }

        $manager->flush();
    }
}

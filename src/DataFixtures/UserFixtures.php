<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne(['email' => 'admin@example.com','roles' => ['ROLE_USER','ROLE_ADMIN']]);
        UserFactory::createOne(['email' => 'abraca_admin@example.com']);
        UserFactory::createMany(10);
        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Trainer;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TrainerFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;

    }


    public function load(ObjectManager $manager)
    {

        $trainer = new Trainer();
        $trainer->setUsername('Red');
        $trainer->setEmail('Red@bourg-palette.com');

        $password = $this->encoder->encodePassword($trainer, 'bourg-palette');
        $trainer->setPassword($password);

        $manager->persist($trainer);
        $manager->flush();
    }

}

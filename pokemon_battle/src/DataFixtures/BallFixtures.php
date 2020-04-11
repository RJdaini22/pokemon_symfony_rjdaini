<?php

namespace App\DataFixtures;

use App\Entity\Ball;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BallFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->ballData() as $item){
            $ball = new Ball();
            $ball
                ->setName($item['name'])
                ->setDescription($item['description'])
                
            ;

            $manager->persist($ball);    
              

        }
        
        $manager->flush();
    }

    private function ballData() :array
    {

        return[
            [
                'name' => 'Poke Ball',
                'description' => "La plus classique des Balls. Elle a un bonus Ball de 1. Elle vaut 200 Pokédollar à l'achat et 100 Pokédollar à la revente.",
            ],
            [
                'name' => 'Super Ball',
                'description' => "Tout comme la Poké Ball, la Super Ball n'a pas d'effet secondaire. Elle a cependant un Bonus Ball supérieure à celle-ci, le Bonus Ball de la Poké Ball étant de 1.",
            ],
            [
                'name' => 'Hyper Ball',
                'description' => "Tout comme la Poké Ball et la Super Ball, la Hyper Ball n'a pas d'effet secondaire. Elle a cependant un Bonus Ball supérieur aux deux autres (celui de la Poké Ball étant de 1, et celui de la Super Ball de 1,5).",
            ],
            [
                'name' => 'Master Ball',
                'description' => "La Master Ball est considérée comme la meilleure Ball : en effet, dû à son Bonus Ball de 255, elle peut capturer n'importe quel Pokémon sauvage à coup sûr.",
            ],
            [
                'name' => 'Safari Ball',
                'description' => "La Safari Ball n'a aucun effet particulier. Elle est utilisée pour capturer les Pokémon lors de safaris, et a le même Bonus Ball que la Super Ball.",
            ],

        ];
    }
}

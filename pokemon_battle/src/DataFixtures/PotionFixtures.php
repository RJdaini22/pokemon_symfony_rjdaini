<?php

namespace App\DataFixtures;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PotionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->potionData() as $item){
            $potion = new Potion();
            $potion
                ->setName($item['name'])
                ->setDescription($item['description'])
                ->setPower($item['power'])
                
            ;

            $manager->persist($potion);    
              

        }
        
        $manager->flush();
    }

    private function PotionData() :array
    {

        return[
            [
                'name' => 'Potion',
                'description' => "La Potion « classique » est la plus fréquente. Le joueur pourra la trouver dans les premiers magasins du jeu. Elle restaure 20 PV et coûte 300 Pokédollar.",
                'power' => '20',
                
            ],
            [
                'name' => 'Super Potion',
                'description' => "La Super Potion est une potion améliorée. Elle restaure 50 PV et coûte 700 Pokédollar.",
                'power' => '50',
                
            ],
            [
                'name' => 'Hyper Potion',
                'description' => "L'Hyper Potion est une Potion bien plus efficace. Elle restaure 200 PV et coûte 1200 Pokédollar.",
                'power' => '100',
                
            ],
            [
                'name' => 'Max Potion',
                'description' => "La Potion Max restaure tous les PV du Pokémon (mais pas le statut) et coûte 2500 Pokédollar.",
                'power' => '999',
                
            ],

        ];
    }
}

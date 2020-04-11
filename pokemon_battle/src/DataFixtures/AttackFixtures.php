<?php

namespace App\DataFixtures;

use App\Entity\Attack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AttackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->attackData() as $item){
            $attack = new Attack();
            $attack
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setDescription($item['description'])
                ->setType($item['type'])
                
                
            ;

            $manager->persist($attack);
            $this->addReference($item['name'], $attack);   
              

        }
        
        $manager->flush();
    }

    private function attackData() :array
    {

        return[
            [
                'name' => 'Flammèche',
                'power' => '50',
                'type' => '1',
                'description' => "L'ennemi est attaqué par une faible flamme. Peut aussi le brûler.",
            ],
            [
                'name' => 'Pistolet à O',
                'power' => '50',
                'type' => '2',
                'description' => "De l'eau est projetée avec force sur l'ennemi.",
            ],
            [
                'name' => 'Fouet-lianes',
                'power' => '50',
                'type' => '3',
                'description' => "Fouette l'ennemi avec de fines lianes pour infliger des dégâts.",
            ],
            [
                'name' => 'Piqûre',
                'power' => '60',
                'type' => '4',
                'description' => "Le lanceur pique l'ennemi. Si ce dernier tient une Baie, le lanceur la dévore et obtient son effet.",
            ],
            [
                'name' => 'Tornade',
                'power' => '40',
                'type' => '5',
                'description' => "Le lanceur bat des ailes pour générer une bourrasque qui blesse l'ennemi.",
            ],
            [
                'name' => 'Griffe',
                'power' => '80',
                'type' => '6',
                'description' => "Lacère l'ennemi avec des griffes acérées pour lui infliger des dégâts.",
            ],
            [
                'name' => 'Direct Toxik',
                'power' => '80',
                'type' => '7',
                'description' => "Attaque l'ennemi avec un tentacule, un bras, ou un autre membre plein de poison. Peut aussi l'empoisonner.",
            ],
            [
                'name' => 'Eclair',
                'power' => '60',
                'type' => '8',
                'description' => "Une décharge électrique tombe sur l'ennemi. Peut aussi le paralyser.",
            ],
            [
                'name' => 'Ampleur',
                'power' => '90',
                'type' => '9',
                'description' => "Provoque un tremblement de terre d’intensité variable qui affecte tous les Pokémon alentour. L’efficacité varie.",
            ],
            [
                'name' => 'Point-Karaté',
                'power' => '70',
                'type' => '10',
                'description' => "L'ennemi est tranché violemment. Taux de critique élevé.",
            ],
            [
                'name' => 'Psyko',
                'power' => '110',
                'type' => '11',
                'description' => "Une puissante force télékinésique frappe l'ennemi. Peut aussi faire baisser sa Défense Spéciale.",
            ],
            [
                'name' => 'Jet-pierres',
                'power' => '60',
                'type' => '12',
                'description' => "Le lanceur lâche une pierre sur l'ennemi.",
            ],
            [
                'name' => 'Bombaimant',
                'power' => '70',
                'type' => '13',
                'description' => "Le lanceur projette des bombes d'acier qui collent à l'ennemi. N'échoue jamais.",
            ],
            [
                'name' => 'Laser glace',
                'power' => '80',
                'type' => '14',
                'description' => "Un rayon de glace frappe l'ennemi. Peut aussi le geler.",
            ],
            [
                'name' => 'BallOmbre',
                'power' => '80',
                'type' => '15',
                'description' => "Projette une grande ombre sur l'ennemi. Peut aussi faire baisser sa Défense Spéciale.",
            ],
            [
                'name' => 'Colère',
                'power' => '100',
                'type' => '16',
                'description' => "Le lanceur enrage et attaque pendant deux ou trois tours avant de devenir confus.",
            ],
            [
                'name' => 'Dracochoc',
                'power' => '85',
                'type' => '16',
                'description' => "Le lanceur ouvre la bouche pour envoyer une onde de choc qui frappe l'ennemi.",
            ],


        ];
    }
}

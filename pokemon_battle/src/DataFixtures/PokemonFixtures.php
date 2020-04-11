<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->pokemonData() as $item){
            $pokemon = new Pokemon();
            $pokemon
                ->setName($item['name'])
                ->setHp($item['hp'])
                ->setNature($item['nature'])
                ->setType($item['type'])
                ->setDescription($item['description'])
                ->addAttack($item['attack'])
                
                
            ;

            $manager->persist($pokemon);    
            

        }
        
        $manager->flush();
    }

    private function pokemonData() :array
    {

        return[
            [
                'name' => 'Bulbizarre',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '3',
                'description' => 'Bulbizarre passe son temps à faire la sieste sous le soleil. Il y a une graine sur son dos. Il absorbe les rayons du soleil pour faire doucement pousser la graine.',
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Herbizarre',
                'hp' => '100',
                'nature' => 'Peureux',
                'type' => '3',
                'description' => "En emmagasinant de l'énergie, son bulbe grossit. Un arôme en émane quand il s'apprête à éclore.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Florizarre',
                'hp' => '150',
                'nature' => 'Peureux',
                'type' => '3',
                'description' => "Les pétales de sa fleur dorsale absorbent les rayons du soleil pour les convertir en énergie.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Salamèche',
                'hp' => '50',
                'nature' => 'Timide',
                'type' => '1',
                'description' => "La flammèche au bout de sa queue émet un crépitement audible seulement dans les endroits calmes.",
                'attack' => $this->getReference('Flammèche'),

            ],

            [
                'name' => 'Reptincel',
                'hp' => '100',
                'nature' => 'Timide',
                'type' => '1',
                'description' => "Exalté quand il affronte des adversaires puissants, ce Pokémon en vient parfois à cracher des flammes bleutées.",
                'attack' => $this->getReference('Flammèche'),

            ],

            [
                'name' => 'Dracaufeu',
                'hp' => '150',
                'nature' => 'Timide',
                'type' => '1',
                'description' => "Quand il crache son souffle brûlant, la flamme au bout de sa queue s'embrase.",
                'attack' => $this->getReference('Flammèche'),

            ],

            [
                'name' => 'Carapuce',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Caché sous les flots, il crache un jet d'eau sur sa proie et se réfugie à l'intérieur de sa carapace en cas de danger.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Carabaffe',
                'hp' => '100',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Quand on lui tapote la tête, il se cache dans sa carapace, mais son corps ne peut pas y tenir en entier.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Tortank',
                'hp' => '150',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Une fois sa cible dans sa ligne de mire, il projette des jets d'eau plus puissants qu'une lance à incendie.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Chenipan',
                'hp' => '50',
                'nature' => 'Brave',
                'type' => '4',
                'description' => "Ses petites pattes munies de ventouses lui permettent de monter les pentes et de grimper aux murs sans se fatiguer.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Chrysacier',
                'hp' => '75',
                'nature' => 'Brave',
                'type' => '4',
                'description' => "Bien que son corps soit entouré d'une carapace solide, l'intérieur est si mou qu'il ne résisterait pas à une attaque violente.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Papilusion',
                'hp' => '110',
                'nature' => 'Brave',
                'type' => '4',
                'description' => "Il ramasse du nectar chaque jour et l'agglutine sur les poils de ses pattes pour le transporter jusqu'à son nid.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Aspicot',
                'hp' => '40',
                'nature' => 'Calme',
                'type' => '4',
                'description' => "L'aiguillon sur son front est très pointu. Il se cache dans les bois et les hautes herbes, où il se gave de feuilles.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Coconfort',
                'hp' => '60',
                'nature' => 'Calme',
                'type' => '4',
                'description' => "Il peut à peine bouger. Quand il est menacé, il sort parfois son aiguillon pour empoisonner ses ennemis.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Dardargnan',
                'hp' => '90',
                'nature' => 'Calme',
                'type' => '4',
                'description' => "Il se sert de ses trois aiguillons empoisonnés situés sur les pattes avant et l'abdomen pour attaquer sans relâche ses adversaires.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Roucool',
                'hp' => '40',
                'nature' => 'Modeste',
                'type' => '5',
                'description' => "De nature très docile, il préfère projeter du sable pour se défendre plutôt que contre-attaquer.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Roucoups',
                'hp' => '70',
                'nature' => 'Modeste',
                'type' => '5',
                'description' => "Ce Pokémon est très endurant. Il survole en permanence son territoire pour chasser.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Roucarnage',
                'hp' => '140',
                'nature' => 'Modeste',
                'type' => '5',
                'description' => "Ce Pokémon vole à Mach 2 quand il chasse. Ses grandes serres sont des armes redoutables.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Rattata',
                'hp' => '40',
                'nature' => 'Peureux',
                'type' => '6',
                'description' => "Il peut ronger n'importe quoi avec ses deux dents. Quand on en voit un, il y en a certainement 40 dans le coin.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Rattatac',
                'hp' => '90',
                'nature' => 'Peureux',
                'type' => '6',
                'description' => "Ses pattes arrière sont palmées. Il peut donc poursuivre sa proie dans les cours d'eau et les rivières.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Piafabec',
                'hp' => '40',
                'nature' => 'Mauvais',
                'type' => '5',
                'description' => "Il est incapable de voler à haute altitude. Il se déplace très vite pour protéger son territoire.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Rapasdepic',
                'hp' => '100',
                'nature' => 'Mauvais',
                'type' => '5',
                'description' => "Un Pokémon très ancien. S'il perçoit un danger, il fuit instantanément à haute altitude.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Abo',
                'hp' => '40',
                'nature' => 'Doux',
                'type' => '7',
                'description' => "Plus il est âgé, plus son corps est long. La nuit, il s'enroule autour de branches d'arbres pour se reposer.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Arbok',
                'hp' => '100',
                'nature' => 'Doux',
                'type' => '7',
                'description' => "Des études ont révélé que les marques effrayantes de son corps pouvaient former six motifs différents.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Pikachu',
                'hp' => '60',
                'nature' => 'Malin',
                'type' => '8',
                'description' => "Les Pikachu se disent bonjour en se frottant la queue et en y faisant passer du courant électrique.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Raichu',
                'hp' => '120',
                'nature' => 'Malin',
                'type' => '8',
                'description' => "Si ses joues sont à court d'énergie, il lève la queue et capte l'électricité contenue dans l'atmosphère.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Sabelette',
                'hp' => '60',
                'nature' => 'Pudique',
                'type' => '9',
                'description' => "Son corps est sec. Quand la nuit déploie ses ailes de fraîcheur, son épiderme se couvre de rosée.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Sablaireau',
                'hp' => '110',
                'nature' => 'Pudique',
                'type' => '9',
                'description' => "Ses griffes sont redoutables. Si l'une d'elles se casse en combat, elle repousse en un jour.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Nidoran♀',
                'hp' => '40',
                'nature' => 'Bizarre',
                'type' => '7',
                'description' => "Un Pokémon paisible qui n'aime pas se battre. Sa petite corne est empoisonnée.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nidorina',
                'hp' => '80',
                'nature' => 'Bizarre',
                'type' => '7',
                'description' => "Quand ce Pokémon s'abrite au fond de son terrier, ses cornes se rétractent. C'est signe qu'il est détendu.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nidoqueen',
                'hp' => '140',
                'nature' => 'Bizarre',
                'type' => '7',
                'description' => "Son corps musclé est recouvert de dures écailles. On dit qu'elles peuvent repousser.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nidoran♂',
                'hp' => '40',
                'nature' => 'Pressé',
                'type' => '7',
                'description' => "Ses grandes oreilles sont toujours dressées et à l'affût de ce qu'il se passe alentour. S'il est menacé, il se défend avec ses dards venimeux.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nidorino',
                'hp' => '80',
                'nature' => 'Pressé',
                'type' => '7',
                'description' => "Sa corne est venimeuse. Si elle perce un ennemi, elle lui injecte un poison violent.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nidoking',
                'hp' => '140',
                'nature' => 'Pressé',
                'type' => '7',
                'description' => "Ses charges sont dévastatrices grâce à sa peau d'acier. Sa corne perce même le diamant.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Mélofée',
                'hp' => '60',
                'nature' => 'Malin',
                'type' => '6',
                'description' => "Son comportement et son cri adorables font de lui un Pokémon très populaire. Malheureusement, il est difficile d'en croiser un spécimen.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Mélodelfe',
                'hp' => '120',
                'nature' => 'Malin',
                'type' => '6',
                'description' => "Capable d'entendre une aiguille tomber à plus d'un kilomètre, ce Pokémon préfère les endroits calmes et isolés.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Goupix',
                'hp' => '40',
                'nature' => 'Pressé',
                'type' => '1',
                'description' => "Avec l'âge, la fourrure de ses six queues devient de plus en plus belle et soyeuse. Elle est chaude au toucher.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Feunard',
                'hp' => '110',
                'nature' => 'Pressé',
                'type' => '1',
                'description' => "Il est très intelligent et rancunier. Quiconque attrape une de ses queues se fera maudire pour 1 000 ans.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Rondoudou',
                'hp' => '60',
                'nature' => 'Relax',
                'type' => '6',
                'description' => "Il déstabilise ses adversaires grâce à son regard, puis chante une berceuse pour les endormir.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Grodoudou',
                'hp' => '90',
                'nature' => 'Relax',
                'type' => '6',
                'description' => "Son corps est malléable. En aspirant de l'air, il se gonfle jusqu'à atteindre des proportions gigantesques.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Nosferapti',
                'hp' => '40',
                'nature' => 'Rigide',
                'type' => '7',
                'description' => "Il émet des ultrasons pour se diriger et éviter les obstacles sur son trajet.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Nosferalto',
                'hp' => '80',
                'nature' => 'Rigide',
                'type' => '7',
                'description' => "Il s'approche furtivement et attaque sans crier gare. Ses crocs acérés lui servent à sucer le sang.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Mystherbe',
                'hp' => '40',
                'nature' => 'Pudique',
                'type' => '7',
                'description' => "Pendant la journée, il reste en sous-sol et évite le soleil. Il grandit en se baignant au clair de lune.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Mystherbe',
                'hp' => '80',
                'nature' => 'Pudique',
                'type' => '7',
                'description' => "Ce qui semble être sa bave est en fait du nectar très collant. Si on le touche, il est très difficile de s'en dépêtrer.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Rafflesia',
                'hp' => '120',
                'nature' => 'Pudique',
                'type' => '7',
                'description' => "Plus ses pétales sont grands, plus il produit de pollen toxique. Toutefois, le poids de sa tête le fatigue.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Paras',
                'hp' => '30',
                'nature' => 'Discret',
                'type' => '6',
                'description' => "Il s'enfouit pour ronger des racines, mais ce sont les champignons sur son dos qui absorbent presque tous les nutriments.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Parasect',
                'hp' => '70',
                'nature' => 'Discret',
                'type' => '6',
                'description' => "À force de voir son énergie aspirée, il semblerait que ce ne soit plus l'insecte qui réfléchisse, mais le champignon sur son dos.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Mimitoss',
                'hp' => '70',
                'nature' => 'Assuré',
                'type' => '4',
                'description' => "Ses grands yeux lui servent de radar. En pleine lumière, on peut y distinguer des facettes.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Aéromite',
                'hp' => '100',
                'nature' => 'Assuré',
                'type' => '4',
                'description' => "Les écailles de ses ailes sont presque impossibles à retirer lorsqu'elles se collent à la peau, et elles libèrent un poison violent au contact.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Taupiqueur',
                'hp' => '70',
                'nature' => 'Relax',
                'type' => '9',
                'description' => "Ce Pokémon creuse sous terre à faible profondeur. La terre qu'il laisse dans son sillage le rend facile à repérer.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Triopikeur',
                'hp' => '90',
                'nature' => 'Relax',
                'type' => '9',
                'description' => "Ce trio de Taupiqueur est capable de creuser jusqu'à 100 km sous terre, vers l'inconnu.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Miaouss',
                'hp' => '50',
                'nature' => 'Malpoli',
                'type' => '6',
                'description' => "Il aime rassembler des objets brillants. S'il est de bonne humeur, il montre sa collection à son Dresseur.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Persian',
                'hp' => '80',
                'nature' => 'Malpoli',
                'type' => '6',
                'description' => "Très fier, il est difficile à apprivoiser. Dès que quelque chose ne lui plaît pas, il sort les griffes.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Psykokwak',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Il est toujours en proie à des maux de tête. On ignore s'il contrôle ses pouvoirs psychiques.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Akwakwak',
                'hp' => '80',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Ses membres longs et fins se terminent par des nageoires qui lui permettent de nager élégamment.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Férosinge',
                'hp' => '60',
                'nature' => 'Mauvais',
                'type' => '10',
                'description' => "Agile et rapide, ce Pokémon vit dans les arbres. Il s'énerve facilement et s'attaque à tout ce qui bouge quand il est en colère.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Colossinge',
                'hp' => '100',
                'nature' => 'Mauvais',
                'type' => '10',
                'description' => "Sa fureur prend fin quand il n'a plus personne à frapper. Il est difficile d'en être témoin.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Caninos',
                'hp' => '70',
                'nature' => 'Pressé',
                'type' => '1',
                'description' => "Très fidèle il aboie de toutes ses forces pour protéger son Dresseur d'Origine quand un danger le guette.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Arcanin',
                'hp' => '100',
                'nature' => 'Pressé',
                'type' => '1',
                'description' => "Ce Pokémon est admiré depuis toujours pour sa beauté. Il court avec tellement de légèreté qu'on dirait qu'il vole.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Ptitard',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Le sens de la spirale sur son ventre diffère selon son origine. Il préfère la nage à la marche.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Têtarte',
                'hp' => '80',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "S'il se fait attaquer, il se sert de sa spirale pour endormir ses ennemis. Il peut ainsi s'enfuir.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Tartard',
                'hp' => '100',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => "Son corps très musclé lui permet de nager plus rapidement qu'un champion de natation.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Abra',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '11',
                'description' => "Il dort 18 heures par jour. En cas de danger, il se téléporte vers un lieu sûr, même s'il est assoupi.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Kadabra',
                'hp' => '90',
                'nature' => 'Jovial',
                'type' => '11',
                'description' => "Sa présence cause des évènements étranges, comme des horloges tournant à l'envers.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Alakazam',
                'hp' => '120',
                'nature' => 'Jovial',
                'type' => '11',
                'description' => "Ce Pokémon est très intelligent. Sa mémoire infaillible lui permet de retenir tout ce qu'il apprend.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Machoc',
                'hp' => '60',
                'nature' => 'Rigide',
                'type' => '10',
                'description' => "Il essaie de dépenser son énergie débordante en soulevant des rochers, ce qui le rend encore plus fort.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Machopeur',
                'hp' => '90',
                'nature' => 'Rigide',
                'type' => '10',
                'description' => "Son corps robuste ne se fatigue jamais. Il n'hésite pas à aider les gens lorsqu'il s'agit de soulever des objets très lourds.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Mackogneur',
                'hp' => '130',
                'nature' => 'Rigide',
                'type' => '10',
                'description' => "Il enchaîne les coups de poing avec ses quatre bras à une vitesse surprenante.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Chétiflor',
                'hp' => '50',
                'nature' => 'Relax',
                'type' => '3',
                'description' => "Il préfère les endroits chauds et humides. Il capture les Pokémon Insecte avec ses lianes pour les dévorer.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Boustiflor',
                'hp' => '90',
                'nature' => 'Relax',
                'type' => '3',
                'description' => "Quand il a faim, il avale tout ce qui bouge, puis achève ses proies avec de l'acide.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Empiflor',
                'hp' => '110',
                'nature' => 'Relax',
                'type' => '3',
                'description' => "Il attire ses proies avec une odeur de miel et les avale tout entières. Il les digère en un jour seulement, les os y compris.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Tentacool',
                'hp' => '50',
                'nature' => 'Assuré',
                'type' => '2',
                'description' => "Certains échouent sur la plage et sèchent sur le sable. Poussez-les dans l'eau pour les ranimer.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Tentacruel',
                'hp' => '90',
                'nature' => 'Assuré',
                'type' => '2',
                'description' => "Ses 80 tentacules peuvent s'allonger et se rétracter à volonté. Il les utilise pour enserrer sa proie et l'affaiblir avec une toxine.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Racaillou',
                'hp' => '60',
                'nature' => 'Mauvais',
                'type' => '12',
                'description' => "On en trouve près des sentiers de montagne. Si vous marchez dessus par inadvertance, ils s'énervent et attaquent.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Gravalanch',
                'hp' => '80',
                'nature' => 'Mauvais',
                'type' => '12',
                'description' => "Il dévale les sentiers de montagne et traverse les obstacles en les pulvérisant.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Grolem',
                'hp' => '120',
                'nature' => 'Mauvais',
                'type' => '12',
                'description' => "Juste après la mue, son corps est blanc et tendre. Au contact de l'air, sa peau se solidifie et forme une armure.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Ponyta',
                'hp' => '60',
                'nature' => 'Brave',
                'type' => '1',
                'description' => "Il semblerait qu’une fois qu’un Dresseur a gagné la confiance de Ponyta, sa crinière enflammée ne le brûle plus au toucher.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Galopa',
                'hp' => '100',
                'nature' => 'Brave',
                'type' => '1',
                'description' => "Au sein d’un troupeau, c’est le plus rapide qui devient le chef. Il choisit les lieux où se rendre et détermine la vitesse de galop.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Ramoloss',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '11',
                'description' => "Lent et stupide, il aime se la couler douce sans se soucier du temps qui passe.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Flagadoss',
                'hp' => '90',
                'nature' => 'Jovial',
                'type' => '11',
                'description' => "Il mène une vie tranquille en bord de mer. Si le Kokiyas accroché à sa queue s'en va, il redevient un Ramoloss.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Magnéti',
                'hp' => '50',
                'nature' => 'Brave',
                'type' => '13',
                'description' => "Sa nature défie les lois de la gravité. Il flotte grâce à un champ électromagnétique.",
                'attack' => $this->getReference('Bombaimant'),
                
            ],

            [
                'name' => 'Magnéton',
                'hp' => '90',
                'nature' => 'Brave',
                'type' => '13',
                'description' => "Il émet un signal radio étrange. Sa présence augmente la température de 2 °C dans un rayon de 1000 m.",
                'attack' => $this->getReference('Bombaimant'),
                
            ],

            [
                'name' => 'Canarticho',
                'hp' => '80',
                'nature' => 'Gentil',
                'type' => '6',
                'description' => "Il vit là où poussent des tiges. Ces endroits sont rares, ce qui pourrait faire penser que cette espèce de Pokémon est en voie d'extinction.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Doduo',
                'hp' => '80',
                'nature' => 'Mauvais',
                'type' => '5',
                'description' => "Ses petites ailes ne lui permettent pas de voler, mais grâce à ses puissantes pattes, il peut courir très rapidement.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Dodrio',
                'hp' => '100',
                'nature' => 'Mauvais',
                'type' => '5',
                'description' => "Quand une des têtes de Doduo se divise, il devient un Dodrio capable de courir à 60 km/h.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Otaria',
                'hp' => '60',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "Il est à l'aise dans les endroits gelés. Il nage avec plaisir dans de l'eau à -10°C.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Lamantine',
                'hp' => '90',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "Son corps entier est aussi blanc que la neige. Il résiste bien au froid et peut même nager au milieu des icebergs.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Tadmorv',
                'hp' => '70',
                'nature' => 'Modeste',
                'type' => '7',
                'description' => "Ce tas de fange sent si mauvais qu'il est impossible de le toucher. Plus rien ne pousse dans son sillage putride.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Grotadmorv',
                'hp' => '90',
                'nature' => 'Modeste',
                'type' => '7',
                'description' => "Son odeur immonde provoque des évanouissements. Son odorat s'est atrophié à cause de sa propre puanteur.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Kokiyas',
                'hp' => '60',
                'nature' => 'Prudent',
                'type' => '2',
                'description' => "Sa coquille est si résistante qu'elle repousse toutes les attaques. En revanche, il est vulnérable quand celle-ci s'ouvre.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Crustabri',
                'hp' => '90',
                'nature' => 'Prudent',
                'type' => '14',
                'description' => "Quand il referme sa coquille, il est impossible de la rouvrir, même avec une force hors du commun.",
                'attack' => $this->getReference('Laser glace'),
                
            ],

            [
                'name' => 'Fantominus',
                'hp' => '50',
                'nature' => 'Malin',
                'type' => '15',
                'description' => "Son corps gazéiforme lui permet de se glisser n'importe où, mais au moindre coup de vent, il s'envole.",
                'attack' => $this->getReference('BallOmbre'),
                
            ],

            [
                'name' => 'Spectrum',
                'hp' => '80',
                'nature' => 'Malin',
                'type' => '15',
                'description' => "On dit que lorsque quelqu'un a l'impression d'être surveillé dans le noir, c'est sûrement qu'un Spectrum se trouve dans les parages.",
                'attack' => $this->getReference('BallOmbre'),
                
            ],

            [
                'name' => 'Ectoplasma',
                'hp' => '80',
                'nature' => 'Malin',
                'type' => '15',
                'description' => "On dit qu'Ectoplasma surgit parfois des ténèbres pour prendre la vie des personnes égarées en montagne.",
                'attack' => $this->getReference('BallOmbre'),
                
            ],

            [
                'name' => 'Onix',
                'hp' => '80',
                'nature' => 'Assuré',
                'type' => '12',
                'description' => "Il creuse dans le sol à une vitesse de 80 km/h en contorsionnant son immense corps de pierre.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Soporifik',
                'hp' => '60',
                'nature' => 'Bizarre',
                'type' => '11',
                'description' => "Si vous dormez tout le temps près de lui, il partagera parfois avec vous les rêves qu’il a dévorés par le passé.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Hypnomade',
                'hp' => '90',
                'nature' => 'Bizarre',
                'type' => '11',
                'description' => "Évitez son regard quand vous en croisez un, ou il pourrait essayer de vous hypnotiser avec son pendule.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Krabby',
                'hp' => '50',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "S'il se sent menacé, il se cache derrière les bulles émises par sa bouche pour paraître plus gros.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Krabboss',
                'hp' => '80',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "Sa pince gigantesque possède une puissance destructrice phénoménale, mais hors combat, son poids devient un handicap.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Voltorbe',
                'hp' => '60',
                'nature' => 'Brave',
                'type' => '8',
                'description' => "On dit qu'il se déguise en Poké Ball. Il s'autodétruit à la moindre stimulation.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Electrode',
                'hp' => '90',
                'nature' => 'Brave',
                'type' => '8',
                'description' => "Il stocke de l'énergie électrique dans son corps, ce qui le rend instable et explosif.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Noeunoeuf',
                'hp' => '50',
                'nature' => 'Malin',
                'type' => '11',
                'description' => "Ses têtes sont attirées les unes vers les autres et pivotent. Il en faut six pour qu'il maintienne son équilibre.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Noadkoko',
                'hp' => '90',
                'nature' => 'Malin',
                'type' => '11',
                'description' => "Si son cri est aussi bruyant, c'est parce que chacune de ses trois têtes dit ce qu'elle pense.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Osselait',
                'hp' => '50',
                'nature' => 'Malin',
                'type' => '9',
                'description' => "Il porte le crâne de sa défunte mère. Ses pleurs résonnent dans son casque en une triste mélodie.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Ossatueur',
                'hp' => '50',
                'nature' => 'Malin',
                'type' => '9',
                'description' => "Ce Pokémon, autrefois si petit et si faible, est devenu très féroce. Il se bat habilement, armé de son os.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Kicklee',
                'hp' => '100',
                'nature' => 'Malin',
                'type' => '10',
                'description' => "Kicklee peut rétracter et étendre ses jambes à sa guise. La formidable allonge dont il dispose lui permet de frapper des adversaires éloignés.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Tygnon',
                'hp' => '100',
                'nature' => 'Malin',
                'type' => '10',
                'description' => "Ses poings fendent l'air, mais il se fatigue au bout de trois minutes à enchaîner les coups.",
                'attack' => $this->getReference('Point-Karaté'),
                
            ],

            [
                'name' => 'Excelangue',
                'hp' => '80',
                'nature' => 'Bizarre',
                'type' => '6',
                'description' => "Sa langue mesure 2 m et elle est plus agile que ses pattes. Son contact provoque la paralysie.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Smogo',
                'hp' => '50',
                'nature' => 'Mauvais',
                'type' => '7',
                'description' => "On raconte qu’il y a longtemps, ces Pokémon amateurs d’air pollué étaient beaucoup plus nombreux à Galar.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Smogogo',
                'hp' => '90',
                'nature' => 'Mauvais',
                'type' => '7',
                'description' => "Ce Pokémon se nourrit des gaz toxiques, des germes et de la poussière qu'il trouve dans les tas d'ordures.",
                'attack' => $this->getReference('Direct Toxik'),
                
            ],

            [
                'name' => 'Rhinocorne',
                'hp' => '70',
                'nature' => 'Malin',
                'type' => '9',
                'description' => "Il ne peut se souvenir que d'une chose à la fois. S'il se met à courir, il en oublie tout de suite la raison.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Rhinoféros',
                'hp' => '100',
                'nature' => 'Malin',
                'type' => '9',
                'description' => "Son épiderme est si épais qu'il lui permet même de survivre dans du magma d'une température de 2 000 °C.",
                'attack' => $this->getReference('Ampleur'),
                
            ],

            [
                'name' => 'Leveinard',
                'hp' => '120',
                'nature' => 'Gentil',
                'type' => '6',
                'description' => "D'un naturel gentil et aimable, il partage ses œufs nourrissants avec les blessés.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Saquedeneu',
                'hp' => '60',
                'nature' => 'Gentil',
                'type' => '3',
                'description' => "Son corps est masqué par une masse épaisse de lianes bleues qui poussent en permanence.",
                'attack' => $this->getReference('Fouet-lianes'),
                
            ],

            [
                'name' => 'Kangourex',
                'hp' => '110',
                'nature' => 'Relax',
                'type' => '6',
                'description' => "Ce Pokémon élève son petit dans sa poche ventrale. Il est prêt à combattre n'importe quel ennemi pour le protéger.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Hypotrempe',
                'hp' => '60',
                'nature' => 'Malin',
                'type' => '2',
                'description' => "Lorsqu'il est menacé, ce Pokémon crache une encre spéciale ou de l'eau pour se défendre.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Hypocéan',
                'hp' => '80',
                'nature' => 'Malin',
                'type' => '2',
                'description' => "Le contact de ses nageoires dorsales engourdit. Il ancre sa queue au corail quand il dort pour éviter que le courant ne l'emporte.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Poissirène',
                'hp' => '70',
                'nature' => 'Malin',
                'type' => '2',
                'description' => "Ses nageoires dorsales et pectorales sont très développées. Elles lui permettent de nager à une vitesse de cinq nœuds.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Poissoroy',
                'hp' => '70',
                'nature' => 'Malin',
                'type' => '2',
                'description' => "S'il fait des trous dans les rochers avec sa corne pour bâtir son nid, c'est pour éviter que ses Œufs ne soient emportés par les flots.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Stari',
                'hp' => '70',
                'nature' => 'Gentil',
                'type' => '2',
                'description' => "Même découpé en mille morceaux, il peut régénérer les parties de son corps tant que sa partie centrale reste indemne.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Staross',
                'hp' => '100',
                'nature' => 'Gentil',
                'type' => '11',
                'description' => "On dit que si le centre de son corps, appelé le cœur, brille de sept couleurs, c'est parce qu'il est en train de communiquer.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'MrMime',
                'hp' => '80',
                'nature' => 'Bizarre',
                'type' => '11',
                'description' => "Son talent pour le mime est indéniable. Il émet des ondes du bout des doigts pour créer un mur qui le protège de nombreuses attaques.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Insécateur',
                'hp' => '80',
                'nature' => 'Brave',
                'type' => '4',
                'description' => "Bondissant hors de l'herbe comme un ninja, il lacère sa proie de ses griffes acérées.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Lippoutou',
                'hp' => '80',
                'nature' => 'Bizarre',
                'type' => '14',
                'description' => "Bondissant hors de l'herbe comme un ninja, il lacère sa proie de ses griffes acérées.",
                'attack' => $this->getReference('Laser glace'),
                
            ],

            [
                'name' => 'Elektek',
                'hp' => '80',
                'nature' => 'Pudique',
                'type' => '8',
                'description' => "Il provoque de grosses pannes de courant en se nourrissant de l'électricité des centrales.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Magmar',
                'hp' => '80',
                'nature' => 'Pudique',
                'type' => '1',
                'description' => "Né dans le cratère d'un volcan, son corps est recouvert de flammes. Il ressemble ainsi à une boule de feu.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Scarabrute',
                'hp' => '90',
                'nature' => 'Mauvais',
                'type' => '4',
                'description' => "Il enserre sa proie de sa puissante pince. Il ne peut pas se déplacer dans le froid, donc on le trouve dans les milieux chauds.",
                'attack' => $this->getReference('Piqûre'),
                
            ],

            [
                'name' => 'Tauros',
                'hp' => '90',
                'nature' => 'Relax',
                'type' => '6',
                'description' => "Ce Pokémon brutal est très endurant. Rien n'arrête sa charge tant qu'il n'a pas pulvérisé sa cible.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Magicarpe',
                'hp' => '50',
                'nature' => 'Prudent',
                'type' => '2',
                'description' => "Ce Pokémon est si faible que, dans les eaux à forts courants, il se contente de se laisser porter lamentablement.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Léviator',
                'hp' => '130',
                'nature' => 'Prudent',
                'type' => '2',
                'description' => "Quand il se laisse emporter par la rage, même la plus violente des tempêtes ne peut l'empêcher de détruire tout ce qui l'entoure.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Lokhlass',
                'hp' => '100',
                'nature' => 'Relax',
                'type' => '14',
                'description' => "Il résiste bien aux très basses températures et peut nager dans des mers glaciales. Sa peau est lisse et légèrement froide au toucher.",
                'attack' => $this->getReference('Laser glace'),
                
            ],

            [
                'name' => 'Métamorph',
                'hp' => '70',
                'nature' => 'Bizarre',
                'type' => '6',
                'description' => "Quand il rencontre l'un de ses semblables, il s'agite avec plus de vivacité que d'habitude pour adopter exactement la même forme que lui.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Evoli',
                'hp' => '70',
                'nature' => 'Bizarre',
                'type' => '6',
                'description' => "L'ADN de ce Pokémon très particulier recèle de nombreuses possibilités d'évolution.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Aquali',
                'hp' => '120',
                'nature' => 'Bizarre',
                'type' => '2',
                'description' => "Sa structure cellulaire est similaire à la composition moléculaire de l'eau. Une fois dans cet élément, il devient indétectable à l’œil nu.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Voltali',
                'hp' => '120',
                'nature' => 'Bizarre',
                'type' => '8',
                'description' => "Il se charge d'ions négatifs contenus dans l'air pour envoyer des décharges d'environ 10 000 volts.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Pyroli',
                'hp' => '120',
                'nature' => 'Bizarre',
                'type' => '1',
                'description' => "Il emmagasine de l'air dans sa poche de flammes et le chauffe à une température de 1 700 °C.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Porygon',
                'hp' => '80',
                'nature' => 'Prudent',
                'type' => '6',
                'description' => "Ce Pokémon est censé être le seul à pouvoir voler jusque dans l'espace, mais pour l'instant, aucun Porygon n'y est jamais parvenu.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Amonita',
                'hp' => '60',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "Un ancien Pokémon reconstitué à partir d’un fossile. Il nageait dans les mers antiques grâce à ses dix tentacules.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Amonistar',
                'hp' => '120',
                'nature' => 'Relax',
                'type' => '2',
                'description' => "Sa bouche est formée de crocs aiguisés. Il aurait disparu car sa coquille, trop grosse, l'empêchait de se déplacer facilement.",
                'attack' => $this->getReference('Pistolet à O'),
                
            ],

            [
                'name' => 'Kabuto',
                'hp' => '60',
                'nature' => 'Assuré',
                'type' => '12',
                'description' => "Un Pokémon reconstitué à partir d'un fossile. Il utilise les yeux situés sur son dos pour regarder alentour quand il se cache au fond de l'eau.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Kabutops',
                'hp' => '120',
                'nature' => 'Assuré',
                'type' => '12',
                'description' => "Ce Pokémon au corps fin est très bon nageur. Il lacère sa proie de ses longues griffes pour en absorber les fluides corporels.",
                'attack' => $this->getReference('Jet-pierres'),
                
            ],

            [
                'name' => 'Ptéra',
                'hp' => '120',
                'nature' => 'Gentil',
                'type' => '5',
                'description' => "Un Pokémon féroce disparu il y a longtemps. Il a été reconstitué à partir d'ADN fossilisé dans de l'ambre.",
                'attack' => $this->getReference('Tornade'),
                
            ],

            [
                'name' => 'Ronflex',
                'hp' => '140',
                'nature' => 'Doux',
                'type' => '6',
                'description' => "L'estomac de ce Pokémon est si résistant qu'il peut même digérer de la nourriture avariée.",
                'attack' => $this->getReference('Griffe'),
                
            ],

            [
                'name' => 'Artikodin',
                'hp' => '150',
                'nature' => 'Brave',
                'type' => '14',
                'description' => "Un Pokémon oiseau légendaire. L'hiver, il glace la vapeur d'eau contenue dans l'air pour faire de la neige.",
                'attack' => $this->getReference('Laser glace'),
                
            ],

            [
                'name' => 'Electhor',
                'hp' => '150',
                'nature' => 'Modeste',
                'type' => '8',
                'description' => "Ce Pokémon oiseau légendaire apparaît quand le ciel s'assombrit et que la foudre ne cesse de tomber.",
                'attack' => $this->getReference('Eclair'),
                
            ],

            [
                'name' => 'Sulfura',
                'hp' => '150',
                'nature' => 'Sérieux',
                'type' => '1',
                'description' => "Quand ce Pokémon oiseau légendaire agite ses ailes de feu, même la nuit noire s'embrase et rougeoie.",
                'attack' => $this->getReference('Flammèche'),
                
            ],

            [
                'name' => 'Minidraco',
                'hp' => '60',
                'nature' => 'Prudent',
                'type' => '16',
                'description' => "Il grandit en enchaînant les mues. Les bottes faites avec la peau de ces mues sont des produits de grand luxe.",
                'attack' => $this->getReference('Colère'),
                
            ],

            [
                'name' => 'Draco',
                'hp' => '90',
                'nature' => 'Prudent',
                'type' => '16',
                'description' => "Selon des témoins, son corps est baigné d'une étrange aura lui donnant un air mystique.",
                'attack' => $this->getReference('Colère'),
                
            ],

            [
                'name' => 'Dracolosse',
                'hp' => '140',
                'nature' => 'Prudent',
                'type' => '16',
                'description' => "On raconte que ce Pokémon vit quelque part dans la mer et qu'il peut voler. Rien n'est moins sûr.",
                'attack' => $this->getReference('Dracochoc'),
                
            ],

            [
                'name' => 'Mewtwo',
                'hp' => '140',
                'nature' => 'Sérieux',
                'type' => '11',
                'description' => "Son ADN est presque le même que celui de Mew, mais sa taille et son caractère sont très différents.",
                'attack' => $this->getReference('Psyko'),
                
            ],

            [
                'name' => 'Mew',
                'hp' => '100',
                'nature' => 'Gentil',
                'type' => '11',
                'description' => "À l'aide d'un microscope, on peut distinguer le pelage extrêmement court, fin et délicat de ce Pokémon.",
                'attack' => $this->getReference('Psyko'),
                
            ],



            








        ];
    }
}


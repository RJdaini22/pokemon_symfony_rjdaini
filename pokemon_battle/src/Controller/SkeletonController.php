<?php

namespace App\Controller;

use App\Entity\Ball;
use App\Entity\Team;
use App\Entity\Trainer;
use App\Form\RegistrationType;

use App\Repository\BallRepository;
use App\Repository\TeamRepository;
use App\Repository\AttackRepository;
use App\Repository\PotionRepository;
use App\Repository\PokemonRepository;
use App\Repository\TrainerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class SkeletonController extends AbstractController
{

    /**
     * @Route("/home", name="skeleton_home")
     */
    public function index()
    {
        return $this->render('skeleton/index.html.twig', [
            'controller_name' => 'SkeletonController',
        ]);
    }


    /**
     * @Route("/balls", name="skeleton_balls")
     */
    public function balls_display(BallRepository $ballRepository): Response {

        return $this->render('skeleton/balls.html.twig', [
            'balls' => $ballRepository->findAll(),
        ]);
    }

    /**
     * @Route("/pokemons", name="skeleton_pokemons")
     */
    public function pokemons_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findAll(),

            
        ]);
    }

    /**
     * @Route("/potions", name="skeleton_potions")
     */
    public function potions_display(PotionRepository $potionRepository): Response {

        return $this->render('skeleton/potions.html.twig', [
            'potions' => $potionRepository->findAll(),
        ]);
    }
    
    /**
     * @Route("/attacks", name="skeleton_attacks")
     */
    public function attacks_display(AttackRepository $attackRepository): Response {

        return $this->render('skeleton/attacks.html.twig', [
            'attacks' => $attackRepository->findAll(),
        ]);
    }

    /**
     * @Route("pokemons/fire", name="skeleton_fire_type")
     */
    public function fire_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 1)),
        ]);
    }

    /**
     * @Route("pokemons/water", name="skeleton_water_type")
     */
    public function water_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 2)),
        ]);
    }

    /**
     * @Route("pokemons/grass", name="skeleton_grass_type")
     */
    public function grass_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 3)),
        ]);
    }

    /**
     * @Route("pokemons/bug", name="skeleton_bug_type")
     */
    public function bug_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 4)),
        ]);
    }

    /**
     * @Route("pokemons/fly", name="skeleton_fly_type")
     */
    public function fly_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 5)),
        ]);
    }

    /**
     * @Route("pokemons/normal", name="skeleton_normal_type")
     */
    public function normal_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 6)),
        ]);
    }

    /**
     * @Route("pokemons/poison", name="skeleton_poison_type")
     */
    public function poison_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 7)),
        ]);
    }

    /**
     * @Route("pokemons/electrik", name="skeleton_electrik_type")
     */
    public function electrik_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 8)),
        ]);
    }

    /**
     * @Route("pokemons/ground", name="skeleton_ground_type")
     */
    public function ground_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 9)),
        ]);
    }

    /**
     * @Route("pokemons/fighting", name="skeleton_fighting_type")
     */
    public function fighting_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 10)),
        ]);
    }

    /**
     * @Route("pokemons/psy", name="skeleton_psy_type")
     */
    public function psy_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 11)),
        ]);
    }

    /**
     * @Route("pokemons/rock", name="skeleton_rock_type")
     */
    public function rock_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 12)),
        ]);
    }

    /**
     * @Route("pokemons/steel", name="skeleton_steel_type")
     */
    public function steel_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 13)),
        ]);
    }

    /**
     * @Route("pokemons/ice", name="skeleton_ice_type")
     */
    public function ice_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 14)),
        ]);
    }

    /**
     * @Route("pokemons/ghost", name="skeleton_ghost_type")
     */
    public function ghost_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 15)),
        ]);
    }

    /**
     * @Route("pokemons/dragon", name="skeleton_dragon_type")
     */
    public function dragon_display(PokemonRepository $pokemonRepository): Response {

        return $this->render('skeleton/pokemons.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('type' => 16)),
        ]);
    }

    /**
     * @Route("/trainer", name="skeleton_trainer")
     */
    public function trainer_display(TeamRepository $teamRepository): Response {

        return $this->render('skeleton/trainer.html.twig', [
            'user' => $user = $this->getUser(),
            'teams' => $teamRepository->findBy(array('trainer' => $user)),
            
        ]);
    }

    /**
     * @Route("/redirect", name="skeleton_redirect")
     */
    public function redirection(): Response {

        return $this->render('skeleton/redirection.html.twig', [
            
        ]);
    }

    /**
     * @Route("/all_trainers", name="skeleton_all_trainers")
     */
    public function all_trainers_display(TrainerRepository $trainerRepository): Response {

        return $this->render('skeleton/all_trainers.html.twig', [
            'trainers' => $trainerRepository->findAll(),
        ]);
    }

    /**
     * @Route("pokemons/{id}", name="pokemon_id")
     */
    public function pokemon_id($id,PokemonRepository $pokemonRepository)
    {

        return $this->render('skeleton/pokemons_id.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('id' => $id)),
            'controller_name' => 'SkeletonController',
        ]);
    }

    /**
     * @Route("attacks/{id}", name="attack_id")
     */
    public function attack_id($id,AttackRepository $attackRepository)
    {

        return $this->render('skeleton/attacks_id.html.twig', [
            'attacks' => $attackRepository->findBy(array('id' => $id)),
            'controller_name' => 'SkeletonController',
        ]);
    }

    /**
     * @Route("balls/{id}", name="balls_id")
     */
    public function ball_id($id,BallRepository $ballRepository)
    {

        return $this->render('skeleton/balls_id.html.twig', [
            'balls' => $ballRepository->findBy(array('id' => $id)),
            'controller_name' => 'SkeletonController',
        ]);
    }

    /**
     * @Route("potions/{id}", name="potions_id")
     */
    public function potion_id($id,PotionRepository $potionRepository)
    {

        return $this->render('skeleton/potions_id.html.twig', [
            'potions' => $potionRepository->findBy(array('id' => $id)),
            'controller_name' => 'SkeletonController',
        ]);
    }

    

    



    
}

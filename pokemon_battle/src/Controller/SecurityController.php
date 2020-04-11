<?php

namespace App\Controller;

use App\Entity\Trainer;
use App\Form\RegistrationType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, UserPasswordEncoderInterface $encoder) {
        $trainer = new Trainer();
        
        $form = $this->createForm(RegistrationType::class, $trainer);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $hash = $encoder->encodePassword($trainer, $trainer->getPassword());

            $trainer->setPassword($hash);

            $entityManager->persist($trainer);
            $entityManager->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("/connexion", name="security_login")
     */
    public function login() {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout() {}
}

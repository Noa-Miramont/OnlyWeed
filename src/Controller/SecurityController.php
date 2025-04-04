<?php

namespace App\Controller;

use App\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        // Récupère les erreurs de login s'il y en a
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        // Créer le formulaire de connexion
        $loginForm = $this->createForm(LoginFormType::class, null, [
            'action' => $this->generateUrl('app_login'), // URL de soumission du formulaire
            'method' => 'POST',
        ]);

        // Soumettre le formulaire si une requête POST est effectuée
        $loginForm->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($loginForm->isSubmitted() && $loginForm->isValid()) {
            // Le processus de connexion est généralement géré automatiquement par Symfony
        }
        // Si l'utilisateur est déjà authentifié, redirige-le vers la home page
        if ($this->getUser()) {
            return $this->redirectToRoute('home_page'); // Change 'home_page' par la route de ta page d'accueil
        }

        // Passer le formulaire, les erreurs et le dernier nom d'utilisateur à la vue
        return $this->render('security/login.html.twig', [
            'form' => $loginForm->createView(),  // Passer le formulaire dans la vue
            'error' => $error,                   // Passer l'erreur de connexion
            'last_username' => $lastUsername,    // Passer le dernier nom d'utilisateur
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony gère automatiquement la déconnexion
    }
}

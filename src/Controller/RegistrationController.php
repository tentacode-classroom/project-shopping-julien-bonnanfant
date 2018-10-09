<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\User;

class RegistrationController extends AbstractController
{

    /**
     * @Route("/registration", name="registration")
     */
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $user = new User();

        $form = $this->createFormBuilder($user)
            
            ->add( 'name', TextType::class, array('label'=> 'Prénom'))
            ->add( 'lastname' ,TextType::class, array('label'=> 'Nom'))
            ->add( 'email', EmailType::class)
            ->add( 'password', PasswordType::class, array('label'=> 'Mot de passe'))
            ->add( 's\'inscrire', SubmitType::class)
            ->getForm();

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
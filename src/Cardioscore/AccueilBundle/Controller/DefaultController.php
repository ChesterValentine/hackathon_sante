<?php

namespace Cardioscore\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Cardioscore\AccueilBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="CardioscoreAccueilBundle_index")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('CardioscoreAccueilBundle:Default:index.html.twig');
    }

    /**
     * @Route("/calculUser", name="CardioscoreAccueilBundle_calculUser")
     * @Template()
     */
    public function calculUserAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm("Cardioscore\AccueilBundle\Form\UserType", $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //Calcul

            //return $this->redirectToRoute("CardioscoreAccueilBundle_index");
        }

        return array("form" => $form->createView());
    }
}

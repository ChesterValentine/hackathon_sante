<?php

namespace Cardioscore\AccueilBundle\Controller;

use Cardioscore\AccueilBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $formUser = $this->createForm("Cardioscore\AccueilBundle\Form\UserType", $user);

        $data = array(
            'formUser' => $formUser->createView()
        );
        return $this->render('CardioscoreAccueilBundle:Default:index.html.twig', $data);
    }

    /**
     * @Route("/calculUser", name="CardioscoreAccueilBundle_calculUser")
     * @Method("POST")
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

    /**
     * @Route("/ajax/calc", name="ajax_calc")
     */
    public function ajaxCalc($aUserDatas, $aAnalysisDatas)
    {
        return new JsonResponse(array('data' => json_encode(['test','test'])));
    }
}

<?php

namespace Cardioscore\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CardioscoreAccueilBundle:Default:index.html.twig');
    }

    /**
     * @Route("/ajax/calc", name="ajax_calc")
     */
    public function ajaxCalc($aUserDatas, $aAnalysisDatas)
    {
        return new JsonResponse(array('data' => json_encode(['test','test'])));
    }
}

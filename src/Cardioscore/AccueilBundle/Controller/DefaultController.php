<?php

namespace Cardioscore\AccueilBundle\Controller;

use Cardioscore\AccueilBundle\Entity\User;
use Cardioscore\AccueilBundle\Form\UserType;
use Cardioscore\AccueilBundle\Entity\Analysis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $analyse = new Analysis();
        $user->addAnalysi($analyse);
        $formUser = $this->createForm("Cardioscore\AccueilBundle\Form\UserType", $user);

        $data = array(
            'formUser' => $formUser->createView()
        );
        return $this->render('CardioscoreAccueilBundle:Default:index.html.twig', $data);
    }

    /**
     * @Route("/ajax/calc", name="ajax_calc")
     */
    public function ajaxCalc()
    {
        $post = $_POST['user'];
        
        return new JsonResponse( [
            'iResult' => 30,
            'sMessage' => 'Elevé'
        ]);
        
        define('FACTEUR_RISQUE_OMEGANEMIE',0.33); //modifier la valeur du milieu
        define('FACTEUR_RISQUE_UBIOTE',0.33);//modifier la valeur du milieu

        define('MAX_UBIOTEFB', 5);
        define('MAX_UBIOTEDIVERSITE', 5);
        define('MAX_UBIOTERICHESSE', 5);


        /*ces 3 variables forment l'omeganemie
        si ces trois valeurs sont bonnes l'omeganemie est égale à 0
        si une seule de ces valeurs est mauvaise l'omeganemie est égale à 1
        */
        $RatioO6O3 = $post['user']['analysis']['ratio_o6o3'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true 
        $IndexO3 = $post['user']['analysis']['index_o3'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
        $AA_EPA = $post['user']['analysis']['aa_fpa'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
        $iOmeganemie = 0;

        //test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
        if($RatioO6O3 >= 5)
        {
            $iOmeganemie = 1;
        }
        if($IndexO3 < 6 || $IndexO3 > 8)
        {
            $iOmeganemie = 1;
        }
        if($AA_EPA > 15)
        {
            $iOmeganemie = 1;
        }

        /*ces 3 variables forment les Ubiotes
        si ces trois valeurs sont bonnes les Ubiotes est égale à 0
        si une seule de ces valeurs est mauvaise les Ubiotes est égale à 1
        */
        $UbioteFB = $post['user']['analysis']['ubiote_fb'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
        $UbiotteDiversite = $post['user']['analysis']['ubiote_diversite'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
        $UbioteRichesse = $post['user']['analysis']['ubiote_richesse'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
        $iUbiotes = 0;

        //test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
        if($UbioteFB > MAX_UBIOTEFB) //info à recup
        {
            $iUbiotes = 1;
        }
        if($UbiotteDiversite > MAX_UBIOTEDIVERSITE) // info à recup
        {
            $iUbiotes = 1;
        }
        if(UbioteRichesse > MAX_UBIOTERICHESSE) // info à recup
        {
            $iUbiotes = 1;
        }

        //Ration Tout de taille/taille
        $iHeight = $post['user']['height'];
        $iWaist = $post['user']['waist'];
        $fRatioWaistHeight = $iWaist/$iHeight;

        $bSex = $post['user']['sex'];
        $bTreatedTens = $post['user']['analysis']['treated'];
        $bSmoker = $post['user']['smoker'];
        $fTotalChol = $post['user']['analysis']['total_cholesterol'];
        $fHDLChol = $post['user']['analysis']['hdl_cholesterol'];
        $fSystolicBp = $post['user']['analysis']['systolic_bp'];

        $iAge = $post['user']['age'];

        if($bSex)
        {
            $fMicro = 52.0096 * log($iAge) + 20.0141 * log($fTotalChol) 
            - 0.906 * log($fHDLChol) + 1.305784 * log($fSystolicBp)
            + 0.241549 * (int)$bTreatedTens + 12.096316 * (int)$bSmoker 
            - (4.605038 * log($iAge) * log($fTotalChol)) -(2.84367 * log($iAge) * (int)$bSmoker)
            - (2.93323 * pow($iAge, 2)) - 172.300168 + (int)$iOmeganemie * FACTEUR_RISQUE_OMEGANEMIE
            + (int)$iUbiotes * FACTEUR_RISQUE_UBIOTE + $fRatioWaistHeight;

            $p = 1 - pow(0.9402, exp($fMicro));
        }
        else
        {
            $fMicro = 31.764 * log($iAge) + 22.4652 * log($fTotalChol) 
            - 1.1877 * log($fHDLChol) + 2.5529 * log($fSystolicBp)
            + 0.420251 * (int)$bTreatedTens + 13.07543 * (int)$bSmoker 
            - (5.060998 * log($iAge) * log($fTotalChol)) 
            - (2.996945 * log($iAge) * (int)$bSmoker) - 146.5933061 
            + (int)$iOmeganemie * FACTEUR_RISQUE_OMEGANEMIE + (int)$iUbiotes * FACTEUR_RISQUE_UBIOTE
            + $fRatioWaistHeight;

            $p = 1 - pow(0.98767, exp($fMicro));
        }

        $sMessage = 'Risque ';

        if ($p > 0.4)
        {
            $sMessage .= 'Très élevé.';
        }
        elseif ($p > 0.2 && $p <= 0.4)
        {
            $sMessage .= 'Elevé.';
        }
        elseif ($p > 0.1 && $p <= 0.2)
        {
            $sMessage .= 'Moyen.';
        }
        elseif ($p > 0.05 && $p <= 0.05)
        {
            $sMessage .= 'Faible.';
        }
        else 
        {
            $sMessage .= 'Très faible.';
        }

        return new JsonResponse(array('data' => json_encode(
            [
                'fPercent' => $p * 100,
                'sMessage' => $sMessage
            ]
        )));
    }
    
}

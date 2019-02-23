<?php

define('FACTEUR_RISQUE_OMEGANEMIE',0.33); //modifier la valeur du milieu
define('FACTEUR_RISQUE_UBIOTE',0.33);//modifier la valeur du milieu

define('MAX_UBIOTEFB', 5);
define('MAX_UBIOTEDIVERSITE', 5);
define('MAX_UBIOTERICHESSE', 5);


/*ces 3 variables forment l'omeganemie
si ces trois valeurs sont bonnes l'omeganemie est égale à 0
si une seule de ces valeurs est mauvaise l'omeganemie est égale à 1
*/
$RatioO6O3 = $_POST['ratio_o6o3'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true 
$IndexO3 = $_POST['index_o3'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$AA_EPA = $_POST['aa_fpa'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
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
if($AA_EPA < 15)
{
  $iOmeganemie = 1;
}

/*ces 3 variables forment les Ubiotes
si ces trois valeurs sont bonnes les Ubiotes est égale à 0
si une seule de ces valeurs est mauvaise les Ubiotes est égale à 1
*/
$UbioteFB = $_POST['ubiote_fb'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbiotteDiversite = $_POST['ubiote_diversite'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbioteRichesse = $_POST['ubiote_richesse'];//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
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
$iHeight = $_POST['height'];
$iWaist = $_POST['waist']
$fRatioWaistHeight = $iWaist/$iHeight

$bSex = $_POST['sex'];
$bTreated = $_POST['treated'];
$bSmoker = $_POST['smoker'];
$fTotalChol $_POST['total_cholesterol'];
$fHDLChol = $_POST['hdl_cholesterol'];
$fSystolicBp = $_POST['systolic_bp'];

$iAge = $_POST['age'];
$iHeight = $_POST['height'];
$iWaist = $_POST['waist']


if($bSex)
{
  $fMicro = 52.0096 * log($iAge) + 20.0141 * log($fTotalChol) 
  - 0.906 * log($fHDLChol) + 1.305784 * log($fSystolicBp)
  + 0.241549 * (int)$bTreated + 12.096316 * (int)$bSmoker 
  - (4.605038 * log($iAge) * log($fTotalChol)) -(2.84367 * log($iAge) * (int)$bSmoker)
  - (2.93323 * pow($iAge, 2)) - 172.300168 + (int)$iOmeganemie * FACTEUR_RISQUE_OMEGANEMIE
  + (int)$iUbiotes * FACTEUR_RISQUE_UBIOTE + $fRatioWaistHeight;

  $p = 1 - pow(0.9402, exp($fMicro));
}
else
{
  $fMicro = 31.764 * log($iAge) + 22.4652 * log($fTotalChol) 
  - 1.1877 * log($fHDLChol) + 2.5529 * log($fSystolicBp)
  + 0.420251 * (int)$bTreated + 13.07543 * (int)$bSmoker 
  - (5.060998 * log($iAge) * log($fTotalChol)) 
  - (2.996945 * log($iAge) * (int)$bSmoker) - 146.5933061 
  + (int)$iOmeganemie * FACTEUR_RISQUE_OMEGANEMIE + (int)$iUbiotes * FACTEUR_RISQUE_UBIOTE
  + $fRatioWaistHeight;

  $p = 1 - pow(0.98767, exp($fMicro));
}

return $p;

?>
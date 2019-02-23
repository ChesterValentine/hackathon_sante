<php

$define(FACTEUR_RISQUE_OMEGANEMIE,0.33,true); //modifier la valeur du milieu
$define(FACTEUR_RISQUE_UBIOTE,0.33,true); //modifier la valeur du milieu


/*ces 3 variables forment l'omeganemie
si ces trois valeurs sont bonnes l'omeganemie est égale à 0
si une seule de ces valeurs est mauvaise l'omeganemie est égale à 1
*/
$RatioO6O3;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true 
$IndexO3;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$AA_FPA;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$omegapositif = 0;

//test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
if($RatioO6O3 >= 5)
{
    $omegapositif++;
}
if($IndexO3 < 6 || $IndexO3 > 8)
{
    $omegapositif++;
}
if(AA_FPA < 15)
{
    $omegapositif++;
}

$omeganemie = 0;
if($omegapositif > 0)
{
  $omeganemie = 1;
}



/*ces 3 variables forment les Ubiotes
si ces trois valeurs sont bonnes les Ubiotes est égale à 0
si une seule de ces valeurs est mauvaise les Ubiotes est égale à 1
*/
$UbioteFB;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbiotteDiversite;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbioteRichesse;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbiotesPositif = 0;

//test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
if($UbioteFB) //info à recup
{
  $UbiotesPositif++;
}
if($UbiotteDiversite) // info à recup
{
  $UbiotesPositif++;
}
if(UbioteRichesse) // info à recup
{
  $UbiotesPositif++;
}

$Ubiotes = 0;
if($$UbiotesPositif > 0)
{
  $Ubiotes = 1;
}



boolean bHomme;
boolean bFemme;
boolean bTraitement = $_POST('hypertension');
boolean bFumeur = $_POST('fumeur');
float fTotalChol ;
float fHDLChol ;
int iPressionSang ;

int iAge = $_POST('age');
float fTaille = $_POST('taille');

float fImc = fPoids/pow(fTaille, 2);

if('homme'){
    float micro = 52.0096 * log(iAge) + 20.0141 * log(fTotalChol) - 0.906 * log(fHDLChol) + 1.305784 * log(iPressionSang)
    + 0.241549 * (int)bTraitement) + 12.096316 * (int)bFumeur -(4.605038 * log(iAge) * log(fTotalChol)) -(2.84367 * log(iAge) * (int)bFumeur)
    - (2.93323 * pow(iAge, 2)) - 172.300168 ;

    p = 1 - pow(0.9402, exp(micro));
}
else{
    float micro = 31.764<php

$define(FACTEUR_RISQUE_OMEGANEMIE,0.33,true); //modifier la valeur du milieu
$define(FACTEUR_RISQUE_UBIOTE,0.33,true); //modifier la valeur du milieu


/*ces 3 variables forment l'omeganemie
si ces trois valeurs sont bonnes l'omeganemie est égale à 0
si une seule de ces valeurs est mauvaise l'omeganemie est égale à 1
*/
$RatioO6O3;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true 
$IndexO3;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$AA_FPA;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$omegapositif = 0;

//test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
if($RatioO6O3 >= 5)
{
    $omegapositif++;
}
if($IndexO3 < 6 || $IndexO3 > 8)
{
    $omegapositif++;
}
if(AA_FPA < 15)
{
    $omegapositif++;
}

$omeganemie = 0;
if($omegapositif > 0)
{
  $omeganemie = 1;
}



/*ces 3 variables forment les Ubiotes
si ces trois valeurs sont bonnes les Ubiotes est égale à 0
si une seule de ces valeurs est mauvaise les Ubiotes est égale à 1
*/
$UbioteFB;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbiotteDiversite;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbioteRichesse;//a recup dans le formulaire et si la valeur est comprise dans l'intervalle donnée true
$UbiotesPositif = 0;

//test pour savoir si l'on prend en compte le facteur d'omeganemie dans le calcul
if($UbioteFB) //info à recup
{
  $UbiotesPositif++;
}
if($UbiotteDiversite) // info à recup
{
  $UbiotesPositif++;
}
if(UbioteRichesse) // info à recup
{
  $UbiotesPositif++;
}

$Ubiotes = 0;
if($$UbiotesPositif > 0)
{
  $Ubiotes = 1;
}



boolean bHomme;
boolean bFemme;
boolean bTraitement = $_POST('hypertension');
boolean bFumeur = $_POST('fumeur');
float fTotalChol ;
float fHDLChol ;
int iPressionSang ;

int iAge = $_POST('age');
float fTaille = $_POST('taille');

float fImc = fPoids/pow(fTaille, 2);

if('homme'){
    float micro = 52.0096 * log(iAge) + 20.0141 * log(fTotalChol) - 0.906 * log(fHDLChol) + 1.305784 * log(iPressionSang)
    + 0.241549 * (int)bTraitement) + 12.096316 * (int)bFumeur -(4.605038 * log(iAge) * log(fTotalChol)) -(2.84367 * log(iAge) * (int)bFumeur)
    - (2.93323 * pow(iAge, 2)) - 172.300168 ;

    p = 1 - pow(0.9402, exp(micro));
}
else{
    float micro = 31.764 * log(iAge) + 22.4652 * log(fTotalChol) - 1.1877 * log(fHDLChol) + 2.5529 * log(iPressionSang)
    + 0.420251 * (int)bTraitement) + 13.07543 * (int)bFumeur -(5.060998 * log(iAge) * log(fTotalChol)) -(2.996945 * log(iAge) * (int)bFumeur)
  - 146.5933061 ;

    p = 1 - pow(0.98767, exp(micro));
}

return p;

?>* log(iAge) + 22.4652 * log(fTotalChol) - 1.1877 * log(fHDLChol) + 2.5529 * log(iPressionSang)
    + 0.420251 * (int)bTraitement) + 13.07543 * (int)bFumeur -(5.060998 * log(iAge) * log(fTotalChol)) -(2.996945 * log(iAge) * (int)bFumeur)
  - 146.5933061 ;

    p = 1 - pow(0.98767, exp(micro));
}

return p;

?>
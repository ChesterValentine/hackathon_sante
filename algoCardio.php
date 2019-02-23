<php
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

?>
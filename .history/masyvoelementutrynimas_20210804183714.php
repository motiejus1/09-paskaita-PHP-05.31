<?php 

$masyvas = array(1,2,3,4,5,6,7,8,9,10);

//Mes turime istrinti kazkuri tai elementa is masyvo

//Reikia istrinti skaiciu 5 ir skaiciu 10 is musu turimo masyvo.
// Vadinasi mes turime zinoti elemento vieta masyve
var_dump($masyvas);

echo $masyvas[4];//5

//cia yra paskutinis masyvo elementas
$elementuSkaiciusMasyve = count($masyvas);// 10
//nesvarbu kokio ilgio masyvas, mes visalaika pasirenkame paskutini
echo $masyvas[$elementuSkaiciusMasyve-1];// 10
echo $masyvas[9];//10

unset($masyvas[4]);
unset($masyvas[$elementuSkaiciusMasyve-1]);

var_dump($masyvas);

//foreach

foreach ($masyvas as $elementas) {
    echo $elementas;
    echo 
}

//for



?>
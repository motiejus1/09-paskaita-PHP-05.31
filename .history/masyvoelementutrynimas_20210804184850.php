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
    echo "<br>";
}

//for
// array (size=8)
//   0 => int 1
//   1 => int 2
//   2 => int 3
//   3 => int 4
//   5 => int 6
//   6 => int 7
//   7 => int 8
//   8 => int 9

//atkurti numeracija
$masyvas = array_values($masyvas);

var_dump($masyvas); 


for($i=0; $i< count($masyvas); $i++) {
    //8 0-7 
    echo $masyvas[$i];
    //$masyvas[0]
    //$masyvas[1]
    //$masyvas[2]
    //$masyvas[3]
    //$masyvas[4] !!!!!
    //$masyvas[5]
    //$masyvas[6]
    //$masyvas[7]
// $masyvas[8] ???????
    echo "<br>";
}



?>
<?php 

$masyvas = array(0,1,2,3,4,5,6,7,8,9);
//masyve turim 10 elementu/klientai

//atvaizduoti visus masyvo elementus

//$i = $index
$k = 0;
for($i=0; $i< count($masyvas); $i++) {
    echo $masyvas[$i];
    //0
    //1
    //2
    // ...
    //9
    echo "<br>";
    $k++;
}

//Ar sitas kintamasis galioja uz ciklo ribu? negalioja
//IR jeigu galioja kokia jo reiksme? atsitiktine

echo "i reiksme po ciklo".$i;
echo "i reiksme po ciklo".$i;

//$i - nera

$i = 0; //$indeksas
foreach($masyvas as $elementas) {
    echo $elementas;
    echo "<br>";
    $i++;
}
//Ar sitas kintamasis galioja uz ciklo ribu? galioja
//IR jeigu galioja kokia jo reiksme? elementu skaicius masyve

echo "i reiksme po foreach". $i;






?>
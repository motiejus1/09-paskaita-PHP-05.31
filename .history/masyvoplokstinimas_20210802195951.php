<?php 


//implode ir explode susijes operacija

//implode -> pavercia masyva i teksta pagal specialuji simboli
//explode -> teksta paverci i masyva pagal specialuji simboli

// kintamaji $tekstas = "1,2,3,4,5,6". Paversti i masyva

$tekstas = "1|2|3|4|5|6";
// "1,2,3,4,5,6" => array(1,2,3,4,5,6)

$masyvas = explode("|", $tekstas);
echo $tekstas;
var_dump($masyvas);

// Masyva $masyvas paversti i teksta, kuriame kiekvienas elementas yra atskiriamas .

$naujas_tekstas = implode(".", $masyvas); //1.2.3.4.5.6

$naujas_tekstas = $naujas_tekstas.".7.8.9.101|44";

$naujas_masyvas = explode(".",$naujas_tekstas);// Kiek elementu dabar?


var_dump($naujas_masyvas);
echo $naujas_tekstas;


$dvimatimasyvas = array(
    array("vardas", "pavarde", "telefonas"), // => "vardas,pavarde,telefonas"
    array("vardas1", "pavarde1", "telefonas1"),// => "vardas1,pavarde1,telefonas1"
    array("vardas2", "pavarde2", "telefonas2"), // // => "vardas,pavarde,telefonas"
);

//Sita visa masyva paversti i teksta
//Pameginsime kiekviena dvimacio masyvo elementa pasiversti i teksta
//Kai kiekvienas dvimacio masyvo elementas bus tekstas, tada pritaikysime implode komanda visam
//dvimaciam masyvui

for($i = 0; $i < count($dvimatimasyvas) ; $i++) {

}

?>
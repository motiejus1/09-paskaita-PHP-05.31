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

$naujas_tekstas = $naujas_tekstas.".7.8.9.101"

echo $naujas_tekstas;


?>
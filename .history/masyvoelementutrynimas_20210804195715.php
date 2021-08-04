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

//Atlikti tokius pat veiksmus su asociatyviu masyvu

$asoc_masyvas = array(
    "elementas1" => "1",
    "elementas2" => "2",
    "elementas3" => "3",
    "elementas4" => "4",
    "elementas5" => "5",
    "elementas6" => "6"
);

var_dump($asoc_masyvas);
//istrinti paskutini elementa ir elementas4
//unset funkcija ir zinoti kaip kreiptis i elementa

unset($asoc_masyvas["elementas4"]);
unset($asoc_masyvas["elementas6"]);

var_dump($asoc_masyvas);

//foreach
foreach($asoc_masyvas as $elementas) {
    echo $elementas;
    echo "<br>";
}

//Elementu skaiciavimo sistema
$kitas_asoc_masyvas = array(
    "elementas10" => "1",
    "elementas11" => "2",
    "elementas12" => "3",
    "elementas13" => "4",
    "elementas14" => "5",
    "elementas15" => "6"
);

var_dump($kitas_asoc_masyvas);


for($i=10; $i<16; $i++) {
    echo $kitas_asoc_masyvas["elementas".$i];//elementas10
    echo "<br>";
}


//Dvimaciam masyvui. Paprastas

$dvimatismasyvas = array(
    array(1,2,3,4,5,6,7,8,9), //0
    array(1,2,3,4,5), //1
    array(987,654,321),//2
    array("987","654", "321"),//3
    array(1,2,3,4,5,6,7,8,9), //4
    array(1,2,3,4,5), //5
    array(987,654,321),//6
    array("987","654", "321")//7
);

var_dump($dvimatismasyvas);
//Kaip istrinti visa lentynele?


//unset funkcija ir zinoti kaip kreiptis i visa lentynele
//Norime istrinti paskutine masyvo lentynele.
//Kaip pasirinkti paskutine masyvo lentynele?
// unset($dvimatismasyvas[7]);
// unset($dvimatismasyvas[3]);

//sugriuvo lentyneliu eiliskumas

var_dump($dvimatismasyvas);

$dvimatismasyvas = array_values($dvimatismasyvas);

var_dump($dvimatismasyvas);

// Kaip istrinti pavieni lentyneles elementa?
//unset funkcija ir zinoti kaip kreiptis i pavieni lentyneles elementa

//Istrinti 5 lentynele 5 elementa
unset($dvimatismasyvas[4][4]);

var_dump($dvimatismasyvas);

//atstatyti 5 lentyneles numeravima ????

$dvimatismasyvas[4]=array_values($dvimatismasyvas[4]);

var_dump($dvimatismasyvas);


//Dvimatis masyvas, o jo elementai yra asociatyvus masyvai

$klientai = array();

for($i=0; $i< 10; $i++){
    //klientai masyva sitas ciklas turi pildyti visa lentyna
    //turi prideti nauja masyva i klientai masyva
    $klientas = array(
        "id" => $i+1,
        "vardas" => "vardas".($i+1), 
        "pavarde" => "pavarde".($i+1), 
        "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(0,9999), //38512300000

        //atsitiktiniu budu sugeneruota data
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
        "adresas" => "adresas".($i+1), 
        "elpastas" => "vardas".($i+1)."pavarde".($i+1)."@pastas.lt"
    );

    //kaip dabar papildyti masyva $klientai?
    array_push($klientai, $klientas);
}

//istrinti visa lentynele - klienta 3
//ir kaip istrinti 7 kliento "adresas"

var_dump($klientai);

unset($klientai[2]);

var_dump($klientai);
$klientai=array_values($klientai);
var_dump($klientai);

unset($klientai[6]["adresas"]);

var_dump($klientai);

//Mes susikursime masyva 1,2,3,4,5,6
//Is sito masyvo istrinsime skaicius 3 ir 5
//Tada mes sita masyva pasiversime i teksta
//Ir po to teksta pasiversime atgal i masyva

$skaiciu_masyvas = array(1,2,3,4,5,6);
unset($skaiciu_masyvas[2]);
unset($skaiciu_masyvas[4]);
//Masyva paverciam i teksta
$skaiciu_masyvo_teksas = implode(",", $skaiciu_masyvas );
//Teksta paverciam i masyva

$skaiciu_masyvas = explode(",")




?>
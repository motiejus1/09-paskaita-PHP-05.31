<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09-paskaita</title>
</head>
<body>
    
<?php
// Susikurti asociatyvų masyvą "Klientai".
// Kintamieji:
// vardas
// pavarde
// asmens kodas
// prisijungimo data
// adresas
// elpastas.

// Masyve turi būti 200 klientų. Duomenis užpildyti savo nuožiūrą.
// Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>.
// Visas klientų masyvas saugomas COOKIE.


// Papildomai: Sukurti galimybę pridėti klientą į masyvą bei ištrinti.
if(!isset($_COOKIE["klientai"])) {
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
}


echo "<table>";
//Dvimatis masyvas yra lentele;
//Ka daryti toliau? Ciklas

//$klientai - dvimatis masyvas
//$eilute - vienmatis asociatyvus masyvas
//$stulpelis - masyvo elementas/arba kazkoks kintamasis
foreach ($klientai as $eilute) {
//Isvedineja lentyneles - eilute 200 eiluciu
    echo "<tr>";
    //isvesti stulpelius?
    foreach($eilute as $stulpelis) { // 7 stulpeliai
        echo "<td>";
        echo $stulpelis;
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";

// var_dump($klientai);

// kiekviena karta refreshinus/perkraunant puslapi, musu kintamieji isivalo, 
//igauna savo pradines reiksmes

//mes sukuriame forma
//ivedame duomenis
//spaudziame mygtuka patvirtinti, musu puslapis persikrauna
//paimami duomenys is formos ir array_push mes viska sukeliame į klientai masyva

//COOkies

//kai kuriamas musu klientai masyvas, jis yra isaugomas i sausainiuka
//kai musu masyvas jau yra sausainiukyje, mes ji galime atvaizduoti is sausainiuko
//mes turime isaugoje reiksmes, vadinasi, 
// mes prie sausainiuko reiksmes galime prideti kazka naujo

// cookie mes galim saugoti tik teksta

// setcookie("klientai", $klientai, time() + 3600, "/");

// $klientai_tekstas = implode("|", $klientai);

// echo $klientai_tekstas;

//klientai dvimati masyva pasiversime i teksta

for($i = 0; $i < count($klientai) ; $i++) {
    $klientai[$i] = implode(",", $klientai[$i]);
}

// var_dump($klientai);

$klientai_tekstas = implode("|",$klientai);

// echo $klientai_tekstas;



$klientai_tekstas = $klientai_tekstas . "|505,destytojas,destytojauskas,4957245932,1975-6-18,adresas10,destytojaspavarde10@pastas.lt";


setcookie("klientai", $klientai_tekstas, time() + 3600, "/");

?>


</body>
</html>
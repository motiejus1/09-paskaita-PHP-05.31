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

$klientai = array();

for($i=0; $i< 200; $i++){
    //klientai masyva sitas ciklas turi pildyti visa lentyna
    //turi prideti nauja masyva i klientai masyva
    $klientas = array(
        "id" => $i,
        "vardas" => "vardas".$i, 
        "pavarde" => "pavarde".$i, 
        "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(0,9999), //38512300000

        //atsitiktiniu budu sugeneruota data
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
        "adresas" => "adresas".$i, 
        "elpastas" => "vardas".$i."pavarde".$i."@pastas.lt"
    );

    //kaip dabar papildyti masyva $klientai?
    array_push($klientai, $klientas);
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
        echo $
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";

var_dump($klientai);

?>


</body>
</html>
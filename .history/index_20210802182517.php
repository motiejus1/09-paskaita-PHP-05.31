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

$klientai = array(
    array(
        "id" => "0",
        "vardas" => "vardas0",
        "pavarde" => "pavarde0",
        "asmens_kodas" => "3125465453453",
        "prisijungimo_data" => "2021-08-02",
        "adresas" => "adresas0",
        "elpastas" => "vardas0pavarde0@pastas.lt"
    ),
    array(
        "id" => "1",
        "vardas" => "vardas1",
        "pavarde" => "pavarde1",
        "asmens_kodas" => "3125465453453",
        "prisijungimo_data" => "2021-08-03",
        "adresas" => "adresas1",
        "elpastas" => "vardas1pavarde1@pastas.lt"
    ),
);

for($i=0; $i< 200; $i++){
    //klientai masyva sitas ciklas turi pildyti visa lentyna
    //turi prideti nauja masyva i klientai masyva
    $klientas = array(
        "id" => $i,
        "vardas" => "vardas".$i, 
        "pavarde" => "pavarde".$i, 
        "asmens_kodas" => rand(1000000, 2000000),

        //atsitiktiniu budu sugeneruota data
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-" , 
        "adresas" => "adresas".$i, 
        "elpastas" => "elPastas".$i
    );

}

var_dump($klientai);

?>


</body>
</html>
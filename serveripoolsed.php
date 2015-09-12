<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
</head>
<body>

<?php
    $Nimi = 'Evgeniy';
    $Perenimi = 'Kureyko';
    $Vanus = 21;
    echo $Nimi . " " . $Perenimi . " " . "(" . $Vanus . ")" . "<br>" . PHP_EOL;

    $eesnimi_algab_vokaaliga = true;            //Boolean
    $eletter = substr($Nimi, 0, 1);
    $vowels = array("A", "E", "I", "O", "U", "Õ", "Ä", "Ö", "Ü");
    if (in_array($eletter,$vowels)) {
        echo "Eesnimi algab vokaaliga <br>" . PHP_EOL;
    }

    $isik = new stdClass();                    //Objekt
    $isik->nimi = "Evgeniy";
    $isik->perenimi = "Kueyko";
    $isik->vanus = 21;
    $isik->sugu = "mees";
    echo $isik->nimi . " " . $isik->perenimi . " " . $isik->vanus . " " . $isik-> sugu . "<br>" . PHP_EOL;

    $arv1 = 1.23;           //Float summa
    $arv2 = 2.34;
    echo $arv1 + $arv2;


    if(isset($_GET["koer"]) && $_GET["koer"] == "terjer") {
        echo "Terjer";
    }
?>
</body>
</html>


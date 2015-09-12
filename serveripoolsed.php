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
    $eesnimi_algab_vokaaliga = true;            //Boolean
    echo $Nimi . " " . $Perenimi . " " . "(" . $Vanus . ")";


    $isik = new stdClass();                    //Objekt
    $isik->nimi = "Evgeniy";
    $isik->perenimi = "Kueyko";
    $isik->vanus = 21;
    $isik->sugu = "mees";
    echo $isik->nimi . " " . $isik->perenimi . " " . $isik->vanus . " " . $isik-> sugu;
    if ($eesnimi_algab_vokaaliga = true) {         //If
        echo "Nimi algab vokaaliga";
    }
?>
</body>
</html>


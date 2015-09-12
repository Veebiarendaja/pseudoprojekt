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
    $isik = array("Evgeniy", "Kureyko", "21");                          //Array
    echo $isik[0] . " " . $isik[1] . " " . "(" . $isik[2] . ")";
    if ($eesnimi_algab_vokaaliga = true) {         //If
        echo "Nimi algab vokaaliga";
    }
?>
</body>
</html>
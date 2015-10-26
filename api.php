<?php
if (!empty($_GET['command']) && $_GET['command'] == 'emailvalidation') {
    if(!empty($_GET['email'])) {
        echo (int)validate_email($_GET['email']);
    } else {
        die('email parameeter puudub');
    }
    exit();
}
$filename = 'data.csv';
if (file_exists($filename)) {
    $csv = file_get_contents($filename);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    echo $json;
} else {
    echo "The file $filename not found";
    $fp = fopen('data.csv', "w");
    fwrite($fp, "Angus,Young,NY\nJhonny,White,NY");
    fclose($fp);
}
function validate_email($email){

    $exp = "^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";

    if(eregi($exp,$email)){

        if(checkdnsrr(array_pop(explode("@",$email)),"MX")){
            return true;
        }else{
            return false;
        }

    }else{

        return false;

    }
}
?>
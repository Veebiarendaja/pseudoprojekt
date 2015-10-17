<?php
    $filename = 'data.csv';
if (file_exists($filename)) {
    $csv= file_get_contents($filename);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    echo $json;
} else {
    echo "The file $filename not found";
    $fp = fopen('data.csv',"w");
    fwrite($fp,"Angus,Young,NY\nJhonny,White,NY");
    fclose($fp);
}
?>
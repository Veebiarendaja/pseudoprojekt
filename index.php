<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
</head>
<body>
<?php
$parameter = $_SERVER['QUERY_STRING'];
$url_check = $parameter . ".php";
if(file_exists($url_check))
{
   // echo $url_check;
    echo "<script type='text/javascript'>window.alert('Ymbersuunamine lehele $url_check');</script>";
    require __DIR__ . '/' . $url_check;
}  else
{
    echo "No page found";
}


?>
</body>
</html>

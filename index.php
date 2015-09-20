<?php
    $url = $_GET['page'];
    $url_check = $url . '.php';
    $page = (file_exists($url_check)) ? $_GET['page'] : 'home';
?>
<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
</head>
<body>
<?php
//$parameter = $_SERVER['QUERY_STRING'];
//$url_check = $parameter . ".php";
require __DIR__ . '/' . $page . '.php';
//if(file_exists($url_check))
//{
//   // echo $url_check;
//    echo "<script type='text/javascript'>window.alert('Ymbersuunamine lehele $url_check');</script>";
//    require __DIR__ . '/' . $url_check;
//}  else
//{
//    echo "No page found";
//}


?>
</body>
</html>

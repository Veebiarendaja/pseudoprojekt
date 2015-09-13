<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>

<button onclick="myFunction()">Tere Maailm!</button> <!--Button Alert-->
<br>
<script>
    function myFunction() {
        alert("Tere Maailm!");
    }
</script>
<a  href="http://www.khk.ee" onclick='alert("Tere Maailm!")'>Tere Maailm!</a> <br> <!--Alert link-->
<script>
    function linkFunction() {
        alert("Tere Maailm!");
    }
</script>

<a href="" onclick='alert("j‰‰me siia"); event.preventDefault()'>j‰‰me siia</a> <!--Navigeerimatu link-->


</body>
</html>
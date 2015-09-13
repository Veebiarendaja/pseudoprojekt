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

<a href="" onclick='alert("j‰‰me siia"); event.preventDefault()'>j‰‰me siia</a> <br> <!--Navigeerimatu link-->

<img id="KassKoeraks" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Standing_jaguar.jpg" alt="" onclick="kasskoeraks()">

<script>
    function kasskoeraks() {
        document.getElementById('KassKoeraks').src="http://www.citypresokc.com/wp-content/uploads/2015/03/pug.jpg";
        src.replace()
    }
</script>

</body>
</html>
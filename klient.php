<style type="text/css">
    table, th, td, tr, th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>


<table>
    <thead>
    <tr>
        <th>Eesnimi</th>           <!--Table Header-->
        <th>Perenimi</th>
        <th>Aadress</th>
    </tr>
    </thead>
</table>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js">
</script>
<script>
    $.get("api.php", function (value) {   // api.php
        value = JSON.parse(value); //decode
        for (var i in value) {
            var j = value[i];
            $('table').append("<tr><td>" + j[0] + "</td><td>" + j[1] + "</td><td>" + j[2] + "</td></tr>");
        }
    })
</script>

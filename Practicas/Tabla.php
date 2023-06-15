
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<title>Ingesaurios (Ciclos)</title>

    <?php

echo "<h2>Ingesaurios, 4APM </h2>";


echo "Hoy es " . date("d/m/Y") . "<br>";
date_default_timezone_set("America/Cancun");
echo "La hora es " . date("h:i:sa") . "<br> <br>";

for ($x = 1; $x <=  $_POST["numero"]; $x++) {
    echo "<table>
    <tr>
      <th>Ingesaurios 4APM</th>
    </tr>
    <tr>
      <td>Danna Paola Barbosa Pech</td>
    </tr>
    <tr>
      <td>Enriqueta Lopez Luna</td>
    </tr>
    <tr>
      <td>Julissa Guadalupe Koyoc Azamar</td>
    </tr>
    </table> <br>";
  }

  

?>








</body>




</html>
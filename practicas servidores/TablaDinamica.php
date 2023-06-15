<html>
<head>

<style>
table, th, td {
  border: 1px solid black;
}
</style>

        </head>
    <body>
<title>Datos (Ingesaurios)</title>
<h2>Tabla de Integrantes (Ingesaurios)</h2>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseingesaurios4apm";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Nombre, Edad, Rol, RedSocial, Foto FROM tablaintegrantesingesaurios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

echo "<table>  <tr></tr>
<th>ID</th>
<th>Nombre</th>
<th>Edad</th>
<th>Rol</th>
<th>Red social</th>
<th>Foto</th>
</tr>";


//Esto imprime los datos de lñas historias
  while($row = $result->fetch_assoc()) {
    echo  "
  <tr>
    <td>$row[ID]</td>
    <td>$row[Nombre]</td>
    <td>$row[Edad]</td>
    <td>$row[Rol]</td> 
    <td><a href=$row[RedSocial]> $row[Nombre]</td>
    <td><img src=$row[Foto] width=150 height=150></td>
  </tr>
  
   <br>";


  } echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
    </body>
</html>













<table>
       
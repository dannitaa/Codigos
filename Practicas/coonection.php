<html>
    <body>
<title>Seleccionar Datos (Ingesaurios)</title>
 <h2>Ingesaurios, Seleccion de datos</h2>

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
  while($row = $result->fetch_assoc()) {
    echo "<br>" . "ID: " . $row["ID"].  ", Nombre: " . $row["Nombre"]. ", Edad:" . $row["Edad"].  ", Rol: " . $row["Rol"].  ", RedSocial: " . $row["RedSocial"].  ", Foto:" . $row["Foto"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    </body>
</html>


<html>
<body>
          
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseingesaurios4apm";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$rol = $_POST["rol"];
$rd = $_POST["redsocial"];
$foto = $_POST["foto"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE tablaintegrantesingesaurios SET Nombre = '$nombre', Edad = '$edad', Rol = '$rol', RedSocial = '$rd', Foto = '$foto' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
  echo "Datos actualizados correctamente";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>


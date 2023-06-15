<html>
<body>

<title>Datos agregados</title>        

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseingesaurios4apm";

//VARIABLES

$id = $_POST["ID"];
$nombre = $_POST["NOMBRE"];
$edad = $_POST["EDAD"];
$rol = $_POST["ROL"];
$rd = $_POST["RD"];
$foto = $_POST["FOTO"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tablaintegrantesingesaurios (ID, Nombre, Edad, Rol, RedSocial, Foto)
VALUES ('$id', '$nombre', '$edad', '$rol', '$rd', '$foto')";

if ($conn->query($sql) === TRUE) {
  echo "Datos agregados exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
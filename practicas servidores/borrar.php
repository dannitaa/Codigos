<html>

<title>Datos borrados</title>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseingesaurios4apm";
$id = $_POST["ID"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM `tablaintegrantesingesaurios` WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "ID borrado exitosamente";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>

</html>
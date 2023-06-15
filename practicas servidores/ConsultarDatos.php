<html>
 <body>         

<title>Actualizacion de datos</title>        
<h2>Actualice sus datos:</h2><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseingesaurios4apm";
$id = $_POST["IDconsulta"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Nombre, Edad, Rol, RedSocial, Foto FROM tablaintegrantesingesaurios WHERE id=$id";
$result = $conn->query($sql);


//

if ($result->num_rows > 0) {
  // output data of each row
$row = $result->fetch_assoc();
    echo " 
    <form action='Actu.php' method='post'>
    <b>ID: $id</b> <br><br>
    <input type='hidden' name='id' value = '$id'>
       NOMBRE: <input type='text' name='nombre' value='$row[Nombre]'> <br><br>
       EDAD: <input type='text'  name='edad' value='$row[Edad]'> <br><br>
       ROL: <input type='text'  name='rol' value='$row[Rol]'> <br><br>
       RED SOCIAL: <input type='text' name='redsocial' value='$row[RedSocial]'> <br><br>
       FOTO (NOMBRE DEL ARCHIVO): <input type='text' name='foto' value='$row[Foto]'> <br><br>
       
<input type='submit' value = 'Actualizar'>
";
  
} else {
  echo "0 results";
}
$conn->close();
?>


</body>

</html>
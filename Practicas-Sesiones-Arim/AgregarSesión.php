<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
</head>
<body>
          <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basemiau";

$usuario = $_POST["user"];
$contra = md5($_POST["pass"]);
$email = $_POST["email"];
$name = $_POST["name"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT UserName, Email FROM usuariosmiau WHERE UserName = '$usuario' OR Email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
          // Si coincide:
        $row = $result->fetch_assoc();
            


            if($usuario == $row["UserName"] || $email == $row["Email"]){

                    echo "Este usuario o email ya está registrado, inicie sesión.";
     

            } 
          }
            else {

        $sql = "INSERT INTO usuariosmiau (UserName, Email, Contraseña, Nombre)
       VALUES ('$usuario', '$email', '$contra', '$name')";

         if ($conn->query($sql) === TRUE) {
          echo "Usuario creado correctamente, ya puede iniciar sesión.";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
         $conn->close();

      }

            ?>
</body>
</html>
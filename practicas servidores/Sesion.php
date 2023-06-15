<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php



if (($_POST["usuario"] == "jukilop") && ($_POST["contrasena"] == "keniaostupatrona"))
{


          $_SESSION["token"] = "SI";      

           $_SESSION["NombreEquipo"] = "Ingesaurios";
           $_SESSION["NommbreIntegrante1"] = "Julissa Guadalupe Koyoc Azamar";


          echo "Sesión iniciada.";

} 

if ($_POST["usuario"] == NULL || $_POST["contrasena"] == NULL || $_POST["usuario"] != "jukilop" || $_POST["contrasena"] != "keniaostupatrona") {



           $_SESSION["token"] = "NO"; 
           echo "Sesión NO iniciada.";


}

?>

</body>
</html>
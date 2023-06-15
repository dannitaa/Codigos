<html>
    <body>
        <title>Welcome by Ingesaurios</title>

    <?php
     echo "<h2>by Ingesaurios, 4APM </h2>";
     
    ?>
    Base: <?php echo $_POST["base"];
        ?> <br>
    Altura:  <?php echo $_POST["altura"];
        ?> <br>
<?php 

if ($_POST["base"] <= 0 || $_POST["altura"] <= 0){
    echo "No se puede calcular un área con negativos o ceros.";
}

else {
$area = $_POST["base"] * $_POST["altura"] / 2;
echo "Área: $area";
}

//Integrantes del equipo: Danna Paola Barbosa Pech, Julissa Guadalupe Koyoc Azamar, Enriqueta López Luna




?>


    </body>
</html>



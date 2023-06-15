<html>
<body>
    <title>Numeros de menor a mayor</title>

<h2>Los números ordenados de menor a mayor son:</h2>

<?php

$numeros = array ($_POST["num"], $_POST["num2"], $_POST["num3"], $_POST["num4"]);
sort($numeros);

foreach ($numeros as $key) {
    echo "$key<br>";
}


echo "<h2>by Ingesaurios, 4APM </h2>";

?>





</body>

</html>
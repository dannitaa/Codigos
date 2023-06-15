<html>
<body>
          
<title>Numeros (IF-ELSE) by Ingesaurios</title>

<h2>Los números ordenados de menor a mayor son:</h2> 

<?php

$a = $_POST["num"]; //1
$b = $_POST["num2"]; //2
$c = $_POST["num3"]; //3
$d = $_POST["num4"]; //4
$e = $_POST["num5"]; //5
$aux;



$numeros = array ($a, $b, $c, $d, $e);

for ($i = 0; $i < 5; $i++){

          for ($j = $i + 1; $j < 5; $j++) {

                    if($numeros[$j] < $numeros [$i]) {

                              $aux = $numeros[$i];
                              $numeros[$i] = $numeros [$j];
                              $numeros[$j] = $aux;

                    }
          }
}

for ($i = 0; $i < 5; $i++){

echo "$numeros[$i], ";


}



















?>

</body>

</html>
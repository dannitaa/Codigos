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


if ($a < $b) {

    if ($a< $c) {

               if ($a < $d) {

                        if ($a< $e){
                      echo "$a, $b, $c, $d, $e"; //primera posibilidad
                     } else { //(a > e)
                      echo "$e, $a, $b, $c, $d"; //segunda posibilidad
                      }

                      }else { //(a > d)
                       if ($d < $e){
                          echo "$d, $e, $a, $c, $b"; // tercera
                          } else { //(d > e)
                          echo "$e, $d, $a, $c, $b"; //cuarta
                           }
                        }

              } else { // (a > c) 
                      if ($d < $c){
                       echo "$d, $c, $e, $a, $b"; // quinta
                      } else { //(d > e)
                       echo "$e, $c, $a, $b, $d"; //sexta
                       }
                      }


    } else { // (a>b)

    if ($a< $c) {

               if ($a < $d) {

                        if ($a< $e){
                      echo "$a, $b, $c, $d, $e"; //septima?
                     } else { //(a > e)
                      echo "$e, $a, $b, $c, $d"; //octava?
                      }

                      }else { //(a > d)
                       if ($d < $e){
                          echo "$d, $e, $a, $c, $b"; // novena
                          } else { //(d > e)
                          echo "$e, $d, $a, $b, $c"; //decima
                           }
                        }

              } else { // (a > c) 
                      if ($d < $c){
                       echo "$d, $e, $b, $a, $c"; // onceava
                      } else { //(d > e)
                       echo "$e, $b, $c, $d, $a"; //doceava
                       }
                      }
    }




?>


</body>

</html>
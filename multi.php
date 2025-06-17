<?php

$n1=$_POST ["txtn1"];
$n2=$_POST ["txtn2"];

$suma=$n1+$n2;
$res=$n1-$n2;
$mul=$n1*$n2;
$div=$n1/$n2;

echo"<br> la suma de los numeros es:$suma";

echo"<br> la resta de los numeros es:$res";

echo"<br> la multiplicacion de los numeros es:$mul";

echo"<br> la division es igual a:$div";
?>
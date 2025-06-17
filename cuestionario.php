<?php
$producto=$_POST["txtproducto"];
$cantidad=$_POST["txtcantidad"];
$precio=$_POST["txtprecio"];

$Total=$cantidad*$precio;
echo"producto:$producto";
echo"<br>precio:$precio";
echo"<br>Total a pagar:$Total";
?>
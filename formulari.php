<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo4.css">
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div class="a1">
                <h1>titulo principal</h1>
            </div>
            <div class="a2"><a href="plantilla.html">plantilla</a></div>
            <div class="a3"><a href="formula.html">formulario</a></div>
            <div class="a4"><a href="">enlace3</a></div>
        </div>

        <div class="cuerpo">
           <?php
      $n1=$_POST ["txtn1"];
      $n2=$_POST ["txtn2"];
      
      $suma=$n1+$n2;
      $res=$n1-$n2;
      $mul=$n1*$n2;
      $div=$n1/$n2;
      
      echo"<br> $n1+$n2 es:$suma";
      
      echo"<br> $n1-$n2 es:$res";
      
      echo"<br> $n1*$n2 es:$mul";
      
      echo"<br> $n1/$n2 es:$div";
           ?>
        </div>
        <div class="pie">datos del contacto</div>
    </div>

   
</body>
</html
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
            <div class="a2"><a href="">plantilla</a></div>
            <div class="a3"><a href="">formula</a></div>
            <div class="a4"><a href="">registro</a></div>
        </div>

        <div class="cuerpo">
           <?php
    include("conexion.php");
    $clave=$_POST["txtclave"];
    $nombre=$_POST["txtNOMBRE"]; 
    $SQL="insert into clientes values("$clave",$NOMBRE)";
    if(mysqli_query($conexion,$SQL)){
        echo"registro insertado correctamente";
    }else{
        echo"error".mysqli_error($conexion);
    }
           ?>
        </div>
        <div class="pie">datos del contacto</div>
    </div>

   
</body>
</html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>

    //BIENVENIDA MOSTRAR PELICULAS
    <header>
        <?php require "./components/header.php"; ?>
        <h1>BIENVENIDO, LE MOSTRAMOS LAS PELICULAS DEL CATALOGO</h1>


        //BOTON DE COMPRAR BOLETOS QUE REDIRECCIONA A INICIA DE SESION 
        <button id="btn"><a id="btn-ref" href="./login.php">Iniciar Sesion</a></button>

    </header>

<?php require "./db/conexion.php";?>


<footer></footer>
    
</body>
</html>
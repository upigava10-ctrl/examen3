<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>

    <!-- BIENVENIDA MOSTRAR PELICULAS -->
    <header>
        <?php require "./components/header.php"; ?>
        <h1>BIENVENIDO, LE MOSTRAMOS LAS PELICULAS DEL CATALOGO</h1>


        <!-- BOTON DE COMPRAR BOLETOS QUE REDIRECCIONA A INICIA DE SESION  -->
        <button id="btn"><a id="btn-ref" href="./login.php">Iniciar Sesion</a></button>
        <form action="./login.php" method="POST">
            <button id="btn-2" type="submit">Cerrar Sesión</button>
        </form>

    </header>

<?php 
    $sesion="inactiva";
    if (isset($_SESSION['user'])) {
        echo $_SESSION['user'];
        echo $_SESSION['pass'];
        $sesion="activa";
    }
    if (!empty($_GET)) {
        if ($_SERVER['REQUEST_METHOD']==='GET') {
            if (isset($_GET["msj"])) {
                $msj= $_GET["msj"];
                echo "<div>$msj</div>";
                    }
    }}
        
    require "./db/conexion.php";
    
    $query="SELECT * FROM peliculas";
    $stmt=$pdo->prepare($query);
    $stmt->execute();
    $peliculas=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($peliculas as $pelicula) {
        echo "<div class='card'>";
        
        echo "<div>".$pelicula['titulo']." </div>";
        echo "<div>".$pelicula['precio']." </div>";
        echo "<div>".$pelicula['descripcion']." </div>";
        echo "<br>";            
        echo "</div>";
        echo "
        <form action='' method='GET'>
        <input type='number' name='numero'>
            <button type='submit' id='btn-ref'><a href='./comprar.php?&sesion=$sesion&id={$pelicula['id']}&peli={$pelicula['titulo']}&precio={$pelicula['precio']}' >Comprar</a></button>
        </form>";
        }
        
        
        ?>


<footer></footer>
    
</body>
</html>
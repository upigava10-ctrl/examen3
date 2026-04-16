<?php
   function ingresar($action) {
        
        echo "
        <form action='$action' method='POST'>
        <label for='user'>
            <span>Usuario</span>
            <input type='text' name='user'>

        </label>

        <label for=pass'>
            <span>Contraseña</span>
            <input type='text' name='pass' >

        </label>

        <button id='btn-send' type='submit'>Enviar</button>
    </form>
        ";
    };
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <header>
        <?php require "./components/header.php"; ?>

    </header>

    <div>
        <?php ingresar("./home/sesion.php") ?>
    </div>

    <div>
        <?php // IMPRIMIR MENSAJES GET
        if (!empty($_GET)) {
        if ($_SERVER['REQUEST_METHOD']==='GET') {
            if (isset($_GET["empty"])) {
                $empty= $_GET["empty"];
                echo "<div>$empty</div>";
                    }
                        
            if (isset($_GET["error"])) {
                $error = $_GET["error"];
                echo " <div>$error</div>";
                }            
        }
        
        }
        ?>
    </div>

</body>
</html>
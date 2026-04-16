<?php
   function ingresar() {
        
        echo "
        <form action='' method='POST'>
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


    <div>
        <?php ingresar() ?>
    </div>

</body>
</html>
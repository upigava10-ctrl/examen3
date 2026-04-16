<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentro</title>
</head>
<body>
    
    <?php require "./components/header.php"; ?>

    <!-- MOSTAR DATOS DEL USUARIO -->


    <?php


        if ($_SERVER['REQUEST_METHOD']==='GET') {
            $sesion = $_GET["sesion"];
            $id = $_GET["id"];
            $cantidad=$_POST['numero'];
            var_dump($cantidad);
            echo $cantidad;
            $precio=$_GET['precio'];
            $peli=$_GET['peli'];
            $user=$_SESSION['rol'];
            $monto= $precio*$cantidad;
            

            if (empty($sesion)) {
                $empty="Ingrese a sesion";
                header("Location:./login.php?empty=$empty");
                exit; 
            }elseif ($sesion != "activa") {
                $error="Algo anda mal, vuelva a iniciar sesion";
                header("Location:./login.php?error=$error");
                exit; 
            }else {
                
                require "./db/conexion.php";

                

                $sql="INSERT INTO compras(usuario, id_pelicula , nombre_pelicula, cantidad_boletos, precio_boleto, monto_total) VALUES(?,?,?,?,?,?)";
                $stmt=$pdo->prepare($sql);
                if ($stmt->execute([$user, $id, $peli, $cantidad, $precio, $monto])) {
                    $msj="Registrado";
                    header("Location:./index.php?msj=$msj");
                    exit; 

                }}
        }
    ?>



</body>
</html>
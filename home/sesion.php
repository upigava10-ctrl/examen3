<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentro</title>
</head>
<body>
    
    <?php require "../components/header.php"; ?>

    <!-- MOSTAR DATOS DEL USUARIO -->


    <?php


        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $user = $_POST["user"];
            $pass = $_POST["pass"]; 

            if (empty($user) | empty($pass)) {
                $empty="Campos vacios";
                header("Location:../login.php?empty=$empty");
                exit; 
            }else {
                
                require "../db/conexion.php";
    
                $query="SELECT * FROM usuarios WHERE username=? AND password=?";
                $stmt=$pdo->prepare($query);
                $stmt->execute([$user,$pass]);
                $result=$stmt->fetch();
                if ($user===$result['username'] && $pass===$result['password']) {
                    $_SESSION['user']=$result['username'];
                    $_SESSION['pass']=$result['password'];
                    $_SESSION['rol']=$result['rol'];
        
                    echo $_SESSION['user'];
                    echo $_SESSION['pass'];
                    echo "EXCELENTE CON TODO hermosaaaaa";

                    if ($_SESSION['rol']=="user") {
                        header("Location:../index.php");
                        exit; 
                    }

                    if ($_SESSION['rol']=="admin") {
            
                        $query="SELECT * FROM compras";
                        $stmt=$pdo->prepare($query);
                        $stmt->execute();
                        $compras=$stmt->fetchAll(PDO::FETCH_ASSOC);
            
                        foreach ($compras as $compra) {
                                echo "<div class='card'>";
                                echo "<div>".$compra['id']." </div>";
                                echo "<div>".$compra['usuario']." </div>";
                                echo "<div>".$compra['id_pelicula']." </div>";
                                echo "<div>".$compra['nombre_pelicula']." </div>";
                                echo "<div>".$compra['cantidad_boletos']." </div>";
                                echo "<div>".$compra['precio_boleto']." </div>";
                                echo "<div>".$compra['monto_total']." </div>";
                                echo "<div>".$compra['fecha']." </div>";
                                echo "<br>";
                                echo "</div>";
                            }
            
            
                    }

                }else {
                    $error="Credenciales incorrectas";
                header("Location:../login.php?error=$error");
                exit; 
                }
            }
        }

        
            
            
        
    ?>



</body>
</html>
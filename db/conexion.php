<?php
try {
    $pdo=new PDO("mysql: host=localhost; dbname=examen_php",
     "root","");
    echo "<p>conexion exitosa</p>";
} catch (PDOException $error) {
    echo "$error->getMessage()";
}
?>
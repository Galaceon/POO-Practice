<?php include 'includes/header.php';

// CON SENTENCIAS PREPARADAS

// Conectar a la DB con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

//Creamos la variable con todos los resultados (sin PDO::FETCH_ASSOC saldran 2 array, uno asociativo y otro numerico, con esto tendremos solo el asociativo)
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

include 'includes/footer.php';
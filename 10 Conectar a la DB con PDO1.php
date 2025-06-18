<?php include 'includes/header.php';

// SIN SENTENCIAS PREPARADAS

// Conectar a la DB con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Consultar la DB
$propiedades = $db->query($query)->fetch();

var_dump($propiedades);

include 'includes/footer.php';
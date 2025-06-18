<?php include 'includes/header.php';

//Incluir las otras clases
// Esta vez hemos usado composer y modificado el composer.json
require 'vendor/autoload.php';

use app\Clientes;
use app\Detalles;

$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';
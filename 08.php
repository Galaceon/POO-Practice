<?php include 'includes/header.php';
// Se recomienda tener una clase por archivo


//Incluir las otras clases
function mi_autoload($class) {
    require __DIR__ . '/clases/' . $class . '.php';
}
spl_autoload_register('mi_autoload');


class Clientes {
    public function __construct() { 
        echo "Desde 08.php";
    }
}


$detalles = new Detalles();
$clientes = new Clientes();
$clientes2 = new Clientes();

include 'includes/footer.php';

// spl_autoload_register() toma como parámetro la función mi_autoload, otorgandole a esta misma "acceso" a los nombres de las clases instanciadas, 
// de esa forma el parámetro $clase estaría recibiendo dichos nombres ("Clientes", "Detalles").
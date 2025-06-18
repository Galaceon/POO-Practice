<?php include 'includes/header.php';
// Se recomienda tener una clase por archivo

// Agregamos aqui arriba el app\Detalles junto con un "use" al principio
// Muy usado en laravel esta forma
use app\Clientes;
use app\Detalles;


//Incluir las otras clases
function mi_autoload($class) {
    $partes = explode('\\', $class);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
spl_autoload_register('mi_autoload');


// Quitamos app de app\Detalles y lo escribimos arriba
$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';

// spl_autoload_register() toma como parámetro la función mi_autoload, otorgandole a esta misma "acceso" a los nombres de las clases instanciadas, 
// de esa forma el parámetro $clase estaría recibiendo dichos nombres ("Clientes", "Detalles").
<?php include 'includes/header.php';

// 1. Definir una clase
class Producto {
    // 2. Agregamos atributos
    public $nombre;
    public $precio;
    public $disponible;
}

// 3. Instanciar nuestra clase
$producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 12;
$producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto();
$producto2->nombre = 'Raton';
$producto2->precio = 36;
$producto2->disponible = false;

echo "<pre>";
var_dump($producto2);
echo "</pre>";



include 'includes/footer.php';
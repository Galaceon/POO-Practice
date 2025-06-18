<?php 

// Forma antigua de crear clases, antes de PHP 8

declare(strict_types= 1);
include 'includes/header.php';

// 1. Definir una clase
class Producto {
    // 2. Agregamos atributos
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible = false) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

// 3. Instanciar nuestra clase
$producto = new Producto("Tablet", 12, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Raton', 46, true);

echo "<pre>";
var_dump($producto2);
echo "</pre>";



include 'includes/footer.php';
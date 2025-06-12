<?php 

// Forma moderna de crear clases

declare(strict_types= 1);
include 'includes/header.php';
// MÉTODOS ESTATICOS
//Son diferentes a una funcion normal, no van a usar la palabra  reservada this, sino self y segundo, no necesitan instanciarse
class Producto {

    public $imagen;
    public static $imagenPlaceholder = "Imageen.jpg";

    public function __construct(public string $nombre, public int $precio, public bool $disponible, string $imagen) {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del producto...";
    }
}


// 3. Instanciar nuestra clase
$producto = new Producto("Tablet", 12, true, 'pantalla');
echo Producto::obtenerImagenProducto();


$producto2 = new Producto("Raton", 46, true, 'Raton.jpg');
echo Producto::obtenerImagenProducto();


include 'includes/footer.php';
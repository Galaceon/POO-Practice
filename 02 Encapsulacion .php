<?php 

// Forma moderna de crear clases

declare(strict_types= 1);
include 'includes/header.php';
// ENCAPSULACIÓN
class Producto {

    // public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected - Se puede acceder y modificar unicamente en la clase, no en el objeto (fuera)
    // private - Solo miembros de la misma clase pueden acceder a el


    public function __construct(protected string $nombre, public int $precio, public bool $disponible = false) {
    }

    public function mostrarProducto(): void {
        echo "El producto es " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    //Metodo para acceder al valor protected de nombre
    public function getNombre(): string {
        return $this->nombre;
    }

    
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

// 3. Instanciar nuestra clase
$producto = new Producto("Tablet", 12, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";
//obtencion (y imprimir por 'echo') el atributo de nombre
echo $producto->setNombre("Consola");
echo $producto->getNombre();




$producto2 = new Producto('Raton', 46, true);


include 'includes/footer.php';

// getNombre()
// get en al jerga de programacion, se le llama asi para aclarar que obtenemos algun valor
// set en al jerga de programacion, se le llama asi para aclarar que modificamos algun valor
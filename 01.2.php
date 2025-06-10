<?php 

// Forma moderna de crear clases

declare(strict_types= 1);
include 'includes/header.php';

// Los objetos ($producto y $producto2) que fueron creados en esta instancia(instancia Producto) van a 
// poder usar estas funciones y metodos ( __construct(...) y mostrarProducto() ).

// El definir atributos y metodos se le conoce como ABSTRACCIÓN, es decir, que forma van a tener los datos
// en nuestras clases

// 1. Definir una clase
class Producto {
                                // 2. Agregamos atributos
    public function __construct(public string $nombre, public int $precio, public bool $disponible = false) {}

    public function mostrarProducto() {
        echo "El producto es " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

// 3. Instanciar nuestra clase
$producto = new Producto("Tablet", 12, true);
// Llamado para ejecutar el metodo mostrarProducto
$producto->mostrarProducto();



$producto2 = new Producto('Raton', 46, true);



include 'includes/footer.php';

//En programación, toda función que está dentro de una clase se llama "método". Así que:

    //__construct(...) es una función.
    //mostrarProducto() es una función.

//Pero como están dentro de una clase, se llaman métodos.
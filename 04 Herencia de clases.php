<?php include 'includes/header.php';

// HERENCIA DE CLASES

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad) { }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

// Hereda todas la funciones y constructures de Transporte
class Bicicleta extends Transporte {
    //Podemos usar la misma funcion que en transporte y cambiar o añadir contenido
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y NO GASTA GASOLINA";
    }
}

// Hereda todas la funciones y constructures de Transporte
class Coche extends Transporte {
    //Podemos modificar el constructor de Transporte y añadirle contenido ($transmision añadido)
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) { }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
//Aqui se usa GetInfo desde Bicicleta
echo $bicicleta->GetInfo();

echo "<hr>";

$coche = new Coche(4, 5, "Manual");
echo $coche->getTransmision();
//Aqui se usa GetInfo desde Transporte
echo $coche->GetInfo();

include 'includes/footer.php';
<?php include 'includes/header.php';

// CLASES ABSTRACTAS

//Añadir "abstract" al principio de la clase que no deba instanciarse
abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad) { }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y NO GASTA GASOLINA";
    }
}

class Coche extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) { }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

//Codigo para comprobar clases abstractas
// $transporte = new Transporte(1, 3);
// echo $transporte->getInfo();

echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->GetInfo();

echo "<hr>";

$coche = new Coche(4, 5, "Manual");
echo $coche->getTransmision();
echo $coche->GetInfo();

include 'includes/footer.php';
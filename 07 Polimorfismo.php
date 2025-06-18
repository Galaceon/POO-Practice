<?php include 'includes/header.php';

// POLIMORFISMO
// Los datos pueden tener diferente forma y no va a haber ningun problema

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}


class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad) { }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}


class Coche extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color) { }

    public function getInfo() : string {
        return "El transporte COCHE tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y el color " .  $this->color;
    }

    public function getColor() : string {
        return $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(4, 20));
var_dump($coche = new Coche(4, 5, "Rojo"));

echo $coche->getInfo();
echo "</pre>";

echo "<br>";

echo $coche->getColor();

include 'includes/footer.php';
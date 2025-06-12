<?php include 'includes/header.php';

// INTERFACES
//Es como implementar un plano que SI o Si se debe seguir, como debe de ser la clase, que forma debe tener, que funciones debe de tener y que datos deben retonar
//para que se implemente correctamente. No tiene codigo, no valida nada, solamente nos dice que funciones hay y que retornan.

// Las funciones que hay en una interfaz es el minimo que puede tener en una clase, puedes tener mas funciones en una clase aunque no esten en la interfaz.

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

include 'includes/footer.php';
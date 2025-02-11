<?php
    include 'Persona.php';

    class Studente extends Persona {
        private $matricola;

        // Costruttore
        public function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        // Metodo per presentarsi come studente
        public function presentati() {
            return parent::presentati() . " La mia matricola è " . $this->matricola . ".";
        }
    }
?>

<?php
    class Persona {
        protected $nome;
        protected $cognome;

        // Costruttore
        public function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        // Metodo per presentarsi
        public function presentati() {
            return "Ciao, mi chiamo " . $this->nome . " " . $this->cognome . ".";
        }
    }
?>

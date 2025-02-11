<?php
    class Veicolo {
        protected $marca;
        protected $anno;

        // Costruttore
        public function __construct($marca, $anno) {
            $this->marca = $marca;
            $this->anno = $anno;
        }

        // Getters
        public function getMarca() {
            return $this->marca;
        }

        public function getAnno() {
            return $this->anno;
        }
    }
?>
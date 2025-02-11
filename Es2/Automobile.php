<?php
    include 'Veicolo.php';
    //Classe con ereditarietà
    class Automobile extends Veicolo implements JsonSerializable{
        private $modello;

        // Costruttore
        public function __construct($marca, $anno, $modello) {
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        // Metodo per ottenere il modello
        public function getModello() {
            return $this->modello;
        }

        public function stampa(){
            echo "Marca: " . $this -> marca . "<br>";
            echo "Anno: " . $this -> anno . "<br>";
            echo "Modello: " . $this -> modello . "<br><br>";
        }

        public function jsonSerialize(): array{
            return [
                "marca" => $this-> marca,
                "anno" => $this-> anno,
                "modello" => $this-> modello
            ];
        }
    }
?>
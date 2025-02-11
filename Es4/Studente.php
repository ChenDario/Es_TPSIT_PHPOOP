<?php
    include 'Persona.php';

    class Studente extends Persona implements JsonSerializable{
        private $matricola;

        // Costruttore
        public function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        public function jsonSerialize(): array{
            return array_merge(parent::jsonSerialize(), [
                'matricola' => $this-> matricola
            ]);
        }
    }
?>

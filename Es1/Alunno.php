<?php
class Alunno {
    // Attributi protetti
    protected $nome;
    protected $cognome;
    protected $eta;

    // Costruttore
    public function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    // Metodo di stampa
    public function stampa() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cognome: " . $this->cognome . "<br>";
        echo "Età: " . $this->eta . "<br><br>";
    }
}
?>

<?php
class Alunno implements JsonSerializable{
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

    public function jsonSerialize(): array{
        return [
            'nome' => $this-> nome,
            'cognome' => $this-> cognome,
            'eta' => $this-> eta
        ];
    }
}
?>

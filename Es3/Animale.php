<?php
    class Animale implements JsonSerializable{
        public function verso() {
            return "Verso dell'animale generico";
        }

        public function jsonSerialize(): String{
            return $this->verso();
        }
    }
?>

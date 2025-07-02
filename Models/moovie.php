<?php
    class Moovie{

        public $nome;
        public $anno;
        public $lingua;

        function __construct($_nome,$_anno,$_lingua, Genre $genere){

            $this->nome = $_nome;
            $this->anno = $_anno;
            $this->lingua = $_lingua;

        }

        public function isItalian() {

            if ( $this->lingua == "ITA" ) {
            return true;
            } else {
            return false;
            }
        }


    }
?>
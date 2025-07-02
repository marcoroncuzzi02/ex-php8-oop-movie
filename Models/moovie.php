<?php

    require_once './Traits/logger.php'; 

    class Moovie{

        use logger;

        private $nome;
        protected $anno;
        public $lingua;

        function __construct($_nome,$_anno,$_lingua, Genre $genere){

            $this->nome = $_nome;
            $this->anno = $_anno;
            $this->lingua = $_lingua;

        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nuovoNome) {
            $this->nome=$nuovoNome;
        }

        public function getAnno() {
            return $this->anno;
        }

        public function setAnno($nuovoAnno) {
            $this->anno=$nuovoAnno;
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
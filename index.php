<?php

    class Genre{

        public $nome;

        function __construct($_nome){

            $this->nome = $_nome;
        }
    }

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

    $azione = new Genre("Azione");
    $fantasy = new Genre("Fantasy");
    $azione = new Genre("Commedia");

    
    $batman = new Moovie("Batman", 2002, "ING", $azione);
    $superman = new Moovie("Superman", 2005, "ING", $fantasy);
    $treUomini = new Moovie("Tre Uomini e Una Gamba", 2007, "ITA", $commedia);


    
    
    var_dump($batman->isItalian())

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
</head>

<body>
    
</body>
</html>
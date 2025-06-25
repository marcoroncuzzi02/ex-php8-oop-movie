<?php
    class Moovie{

        public nome;
        public anno;
        public lingua;

        function __construct($_nome,$_anno,$_lingua){

            $this->nome = $_nome;
            $this->anno = $_anno;
            $this->lingua = $_lingua;

        };

        public function isItalian() {

            if ( $this->lingua == "ITA" ) {
            return true;
            } else {
            return false;
            }
        };



    };
    
    $batman = new Moovie("Batman", 2002, "ING");
    $superman = new Moovie("Superman", 2005, "ING");

    
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
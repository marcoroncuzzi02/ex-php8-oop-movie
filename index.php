<?php

    require_once './Models/genre.php'; 
    require_once './Models/moovie.php'; 

    $azione = new Genre("Azione");
    $fantasy = new Genre("Fantasy");
    $commedia = new Genre("Commedia");

    
    $batman = new Moovie("Batman", 2002, "ING", $azione);
    $superman = new Moovie("Superman", 2005, "ING", $fantasy);
    $treUomini = new Moovie("Tre Uomini e Una Gamba", 2007, "ITA", $commedia);

    $moovies = [
        $batman,
        $superman,
        $treUomini
    ];
    
    
    // var_dump($batman->isItalian())

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    

    <h1>MOOVIE LIST</h1>
    <div>
        <?php
            foreach ($moovies as $moovie){
                echo "
                <div class='card mb-3 p-3'> 
                    <h3>TITOLO: $moovie->nome </h3>
                    <p>ANNO: $moovie->anno </p>
                    <p>LINGUA ORIGINALE: $moovie->lingua </p>
                    <p>DISPONIBILE IN ITALIANO: ". ($moovie->isItalian() ? 'SI' : 'NO') ."</p>

                </div>
                ";
            }

            
                
            
        ?>
    </div>
</body>
</html>
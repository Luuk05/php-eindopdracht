<?php 
    // loop door map heen om alle bestanden op te halen
    spl_autoload_register(function($class) {
        include "classes/" . $class . ".php";
    });
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //alles handmatig
    $product1 = new Product("Queen", 12, 1, 10.95, true);
    $product2 = new Product("Queen", 12, 1, 10.95, true);
    
    echo $product1 . "<br>";
    
    echo $product1->getItemNummer() . "<br>";
    $product1->setItemNummer(6);
    
    echo $product1->getNaam() . "<br>";
    $product1->setNaam("willem");
    
    echo $product1->getAantalInVoorraad() . "<br>";
    $product1->setAantalInVoorraad(120);
    
    echo $product1->getMinimumVoorraad() . "<br>";
    $product1->setMinimumVoorraad(12);
    
    echo $product1->getPrijs() . "<br>";
    $product1->setPrijs(100.10);
    
    echo $product1->isVerkoopBaar() . "<br>";
    $product1->setVerkoopBaar(false);

    echo "<br>" . $product1 . "<br>";

    echo $product2 . "<br>";

    $dvd1 = new DVD("Queen Album - A Night at the Opera", 12, 1, 10.95, true, 12, 43.08, 1975, "Trident");
    echo $dvd1->getLengteInMinuten();
    echo $dvd1->getNaam();
    echo $dvd1->minutenNaarUren(150);
    echo "<br>" . $dvd1 . "<br>";

    $cd = new CD("Queen", 12, 1, 10.95, true, "Queen", "Unknown", "Unknown");
    echo $cd . "<br>";


    echo "<br><br><br><br><br> <h2>Dynamisch objecten maken</h2> <br>";
    
    
    //alles dynamisch 
    try {
        //CSV file in de array zetten
        $muziekArray = (new CSVMusicReader())->csvToArray("music.csv", 120);
        $dvds = array();

        // maakt een hele lijst aan dvd objecten.
        for ($i = 1; $i < count($muziekArray); $i++) {
            $muziekNaam = $muziekArray[$i][0];
            $artiest = $muziekArray[$i][1];
            $jaarUitgifte = $muziekArray[$i][3];

            $dvds[] = new DVD($muziekNaam, 10, 5, 6, true, 3, $jaarUitgifte, "Unknown");
        }
    }  
    catch(Exception $e) {
        echo "<br>" . $e->getMessage();
    }

    foreach ($dvds as $item) {
        echo $item . "<br>";
    }

    ?>
</body>
</html>
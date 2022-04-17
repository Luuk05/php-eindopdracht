<?php 

class CD extends Product {
    protected $artiest;
    protected $aantalSongs;
    protected $label;

    public function __construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $verkoopBaar, $artiest, $aantalSongs, $label) {
        parent::__construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $verkoopBaar);
        $this->artiest = $artiest;
        $this->aantalSongs = $aantalSongs;
        $this->label = $label;
    }

    public function getArtiest() {
        return $this->artiest;
    }

    public function setArtiest($newArtiest) {
        $this->artiest = $newArtiest;
    }

    public function getAantalSongs() {
        return $this->aantalSongs;
    }

    public function setAantalSongs($newAantalSongs) {
        $this->aantalSongs = $newAantalSongs;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($newLabel) {
        $this->label = $newLabel;
    }

    // de functie die totaal prijs van voorraad laat zien staat in de parent class

    public function __toString() {
        return parent::__toString() . "<br>" .
        "CD info:<br>" . 
        "Artiest: " . $this->artiest . "<br>" . 
        "Aantal songs " . $this->aantalSongs . "<br>" . 
        "Label: " . $this->label . "<br>" . 
        "============================";
    }
}



?>
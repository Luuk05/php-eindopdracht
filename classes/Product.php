<?php 

class Product {
    protected static $itemnr = 1;
    protected $naam;
    protected $aantalInVoorraad;
    protected $minimumVoorraad;
    protected $prijs;
    protected $verkoopBaar;


    public function __construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $verkoopBaar) {
        self::$itemnr++;
        $this->naam = $naam;
        $this->aantalInVoorraad = $aantalInVoorraad;
        $this->minimumVoorraad = $minimumVoorraad;
        $this->prijs = $prijs;
        $this->verkoopBaar = $verkoopBaar;
    }

   public function getItemNummer() {
        return self::$itemnr;
   }

   public function setItemNummer($newNummer) {
        self::$itemnr = $newNummer;
    }

    public function getNaam() {
        return $this->naam;
    }

   public function setNaam($newNaam) {
        $this->naam = $newNaam;
    }

    public function getAantalInVoorraad() {
        return $this->aantalInVoorraad;
    }

   public function setAantalInVoorraad($newAantalInVoorraad) {
       if ($this->verkoopBaar) {
        if ($newAantalInVoorraad > $this->minimumVoorraad) {
            $this->aantalInVoorraad = $newAantalInVoorraad;
        } else {
            echo "je mag jouw nieuw voorraad niet lager zetten dan de minimum voorraad.";
        }
       } else {
        echo "Dit product is niet verkoopbaar";
       }
    }

    public function getMinimumVoorraad() {
        return $this->minimumVoorraad;
    }

   public function setMinimumVoorraad($newMinimumVoorraad) {
        $this->minimumVoorraad = $newMinimumVoorraad;
    }

    public function getPrijs() {
        return $this->prijs;
    }

   public function setPrijs($newPrijs) {
        $this->prijs = $newPrijs;
    }

    public function isVerkoopBaar() {
        return $this->verkoopBaar;
    }

   public function setVerkoopBaar($newVerkoopBaar) {
        $this->verkoopBaar = $newVerkoopBaar;
    }

    public function getTotaleWaardeVoorraad() {
        return $this->prijs * $this->aantalInVoorraad;
    }

    public function __toString() {
        return "============================<br>" .
                "Product info:<br>" .
                "Totaal aantal producten: " . self::$itemnr . "<br>" .
                "Naam product: " . $this->naam . "<br>" . 
                "Aantal in voorraad: " . $this->aantalInVoorraad . "<br>" . 
                "Minimum voorraad: " . $this->minimumVoorraad . "<br>" . 
                "Product prijs: " . $this->prijs . "<br>" . 
                "Is dit product op voorraad? " . ($this->verkoopBaar ? "Ja" : "nee") . "<br>" . 
                "============================";
    }
}



?>
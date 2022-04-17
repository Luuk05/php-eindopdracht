<?php

class DVD extends Product {
    protected $lengteInMinuten;
    protected $jaarUitgifte;
    protected $filmStudio;

    public function __construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $verkoopBaar, $lengteInMinuten, $jaarUitgifte, $filmStudio) {
        parent::__construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $verkoopBaar);
        $this->lengteInMinuten = $lengteInMinuten;
        $this->jaarUitgifte = $jaarUitgifte;
        $this->filmStudio = $filmStudio;
    }

    public function getLengteInMinuten() {
        return $this->lengteInMinuten;
    }

    public function setLengteInMinuten($newLengteInMinuten) {
        $this->lengteInMinuten = $newLengteInMinuten;
    }

    public function getJaarUitgifte() {
        return $this->jaarUitgifte;
    }

    public function setJaarUitgifte($newJaarUitgifte) {
        $this->jaarUitgifte = $newJaarUitgifte;
    }

    public function getFilmStudio() {
        return $this->filmStudio;
    }

    public function setFilmStudio($newFilmStudio) {
        $this->filmStudio = $newFilmStudio;
    }

    public function getTotaleWaardeVoorraadPlus5Procent() {
        return $this->prijs * $this->aantalInVoorraad * 1.05;
    }

    public function minutenNaarUren($minuten) {
        return $minuten / 60;
    }

    public function __toString() {
        return parent::__toString() . "<br>" .
        "DVD info:<br>" . 
        "Lengte in minuten: " . $this->lengteInMinuten . "<br>" . 
        "Jaar van uitgifte " . $this->jaarUitgifte . "<br>" . 
        "Filmstudio: " . $this->filmStudio . "<br>" . 
        "============================";
    }
}





?>
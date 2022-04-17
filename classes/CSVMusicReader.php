<?php 

class CSVMusicReader {
    private $muziekNaam;
    private $artiest;
    private $datumVanUitgave;

    public function __construct() {
        // $this->muziekNaam = $bestand[0]
        // $this->artiest = $bestand[1]
        // $this->datumVanUitgave = $bestand[2]
    }

    public function csvToArray($bestand, $aantal){
        $i = 0;
        $file_to_read = fopen($bestand, 'r');
     
        while ($i < $aantal ) {   // if not end of file
            $array[] = fgetcsv($file_to_read);
            $i++;
        }
     
        fclose($file_to_read);
        return $array;
    }
}


    

?>


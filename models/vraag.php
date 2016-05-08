<?php
class vraag{
    public $vraagNaam ='';
    public $textVraag='';
    public $soort = '';
    public $antwoordenStd = '';
    public $validatieSoort = '';
    
    function __construct($naam, $textVraag,$soort, $ant, $validatie){
        $this->vraagNaam = $naam;
        $this->textVraag = $textVraag;
        $this->soort = $soort;
        $this->antwoordenStd = $ant;
        $this->validatie = $validatie;
    }
}
?>

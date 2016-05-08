<?php
require('vraag.php');

class vragen extends ArrayIterator{
     public $vragen = array();
    
    function makeVragen(){
       $v = new vraag('persoon','Je zoek een','radio','man, vrouw','radio');
       $v1 = new vraag('zoek','Ben je fan van','radio','voetbal,hockey,schatsen,fiesten','radio');
       $v2 = new vraag ('leeftijd','Wat is je geboorte datum','text',null,'leeftijd');
       $v2 = new vraag ('omschrijving','Praat over jezelf','text',null,'leeftijd');
       $this->vragen = array($v,$v1,$v2);
       return $this->vragen ;
    }
    
    function current(){
        return current($this->vragen);
    }
    
    function previous(){
        return previous($this->vragen);
    }

    function next(){
        return next($this->vragen);
    }

    function getVragen(){
        return $this->vragen;
    }
   /* 
  
     private $huidige;
    private $volgende;
    private $vorige;

    function toevVraag($naam, $type, $ant, $validatie){
        $n = count($$this->vragen)
        $this->vragen[n+1] = ('n'=> $naam, 't' => $type, 'r'=>$ant, 'v'=>$validatie);
 
  }
   
  function verwVraag($vraag){
    $a = array_search($this-vragen,$vraag);
    if($a !== false){
        $this->vragen[a]['n']=> $naam, 't' => $type, 'r'=>$ant, 'v'=>$validatie);
    }
  }
   */ 
}
?>

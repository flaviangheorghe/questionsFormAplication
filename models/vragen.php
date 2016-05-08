<?php
require('vraag.php');

class vragen{
     public $vragen;
    
    function makeVragen(){
       $v = new vraag('persoon','Je zoek een','radio','man, vrouw','radio');
       $v1 = new vraag('zoek','Ben je een','radio','man,vrouw','radio');
       $v2 = new vraag ('leeftijd','Wat is je geboorte datum','text',null,'leeftijd');
       $v2 = new vraag ('omschrijving','Praat over jezelf','text',null,'leeftijd');
       $a = array($v,$v1,$v2);
       return $a;
    }
    
    function current(){
    }
    
    function previous(){
    }

    function next(){
    }

    /* 
         [2] => array('zoek','Ben je een','radio',array['man','vrouw'],'radio'),
        [3] => array('leeftijd','Wat is je geboorte datum','text',null,'leeftijd'),
        [4] => array('omschrijving','Praat over jezelf','text',null,'leeftijd')

     private $huidige;
    private $volgende;
    private $vorige;

    function toevVraag($naam, $type, $ant, $validatie){
        $n = count($$this->vragen)
        $this->vragen[n+1] = ('n'=> $naam, 't' => $type, 'r'=>$ant, 'v'=>$validatie);
 
  }
  function getVragen(){
    return $this->vragen;
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

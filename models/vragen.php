<?php
require('vraag.php');

class vragen extends ArrayIterator{
     public $vragen = array();
    
    
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

}
?>

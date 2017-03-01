<?php
require('./models/vragen.php');
require('./views/formView.php');

class controllerForm{
     function makeVragen(){
       $v = new vraag('persoon','Je zoek een','radio','man, vrouw','radio');
       $v1 = new vraag('zoek','Ben je fan van','radio','voetbal,hockey,schatsen,fiesten','radio');
       $v2 = new vraag ('leeftijd','Wat is je geboorte datum','text',null,'leeftijd');
       $v2 = new vraag ('omschrijving','Praat over jezelf','text',null,'leeftijd');
       $this->vragen = array($v,$v1,$v2);
       return $this->vragen ;
    }

    public function makeForm(){
        $s ='';
        $a = array();
        $vr = new vragen();
        $a = $this->makeVragen();
        $n = count($a);
         try{
            for($i = 0; $i<$n;$i++){
                $y = $a[$i];
                $s .='<p id=p_"'.$i .'">' .$y->textVraag .'</p>';
                switch($y->soort){
                    case 'radio':
                        $antStd = explode(',',$y->antwoordenStd);
                        foreach ($antStd as $ant){
                            $s .= '<input type="' .$y->soort  .'" name="'.$y->vraagNaam .'" value="'. $ant.'"/>'. $ant.'&nbsp;';
                        }
                        break;
                    case 'text':
                        $s .= '<input type="' .$y->soort  .'" name="'.$y->vraagNaam .'"/>';
                        break;
                        
                    
                }
            }
        }
        catch(Exception $exception){print 'An exception has occurred' .$exception->getMessage();}
        
        $fv = new formView();
        $fv->weergevenForm($s);
    }
        
}

?>

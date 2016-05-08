<?php
require('./models/vragen.php');
require('./views/formView.php');

class controllerForm{
    
    public function makeForm(){
        $s ='';
        $a = array();
        $vr = new vragen();
        $a = $vr->makeVragen();
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

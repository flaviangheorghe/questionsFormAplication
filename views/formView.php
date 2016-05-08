<?php
class formView{
    public function makeHTMLStart(){
        print '
            <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulier My geheime liefde</title>
    </head>
    <body>
        <noscript>Om die pagine goed te gebruiken javascript moet actief zijn!</noscript>
        ';
    }
     

    public function weergevenForm($s){
        print '<form method="POST" action="#">';
 
        // toen vragen
        print $s;
        print '</form>';
    } 
     public function makeEindeHTML(){
        print '
        <script type="text/javascript" src=".js/check.js"></script>
        <script type="text/javascript" src=".js/antworden.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
    </body>
</html>
        ';
    }
}
?>

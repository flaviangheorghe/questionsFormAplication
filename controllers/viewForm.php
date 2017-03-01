<?php
    require('./controllers/controllerForm.php');
    class viewForm{
		public makeView(){
			$cf = new controllerForm();
			$cf->makeForm();
		}
    }
?>

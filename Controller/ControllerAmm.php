<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("Model/Model.php");
	include_once("Model/vision.php");
	class ControllerAmm
	{
 		public $model;	
		public $vision;
		
 		public function __construct()  
    		{  
        	
    		} 
 
 		public function invoke($request)
 		{	
			$mod = new Model();
			$vs = new Vision();

			if(isset($request['com']))
			switch ($request['com'])
			{			
				case 'amm':
					$vs->setAmm();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				/*case 'eventi':
					$vs -> setEventiAmm(); // cambiare per portarmi in un'altra pagina
					break;
				*/
				
			}
		}
	}	

?>

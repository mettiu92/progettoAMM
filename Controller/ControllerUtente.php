<?php
	
	include_once("Model/Model.php");
	include_once("Model/vision.php");
	
	class ControllerUtente 
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
				case 'utente':
					$vs->setUtente();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				case 'acquisti':
					$vs ->setAcquisti();
					break;
				
			}
				
			
		}			
	}	

?>

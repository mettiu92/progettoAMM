<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("Model/Model.php");
	include_once("Model/vision.php");
	class Controller 
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
			switch ($request["page"])
  			{	
				case 'login':
					if(isset($_SESSION['user']))
					{
					//Se l'username = utente entro nel sito come un utente altrimenti se =amm entrerò come amministratore
						if($_SESSION['user']=='utente')
							header("Location: index.php?page=utente&com=utente");						
						else if($_SESSION['user']=='amm')
								header("Location: index.php?page=amm&com=amm");
							else 
							{
								$vs->setLogin();						
								$mod->getLogin();
								break;
							}
					}
					else
					{
						$vs->setLogin();						
						$mod->getLogin();
						break;
					}

								
			}
		}
		
	}	

?>

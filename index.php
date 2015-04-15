<?php  

	include_once ("Controller/Controller.php");
	include_once ("Controller/ControllerUtente.php");
	include_once ("Controller/ControllerAmm.php");

	prova::richiesta($_REQUEST);
 	
	class prova
	{
		public static function richiesta($request)
		{
			session_start();
			switch ($request['page'])
			{
				case 'login':
					
					$controller = new Controller();
					$controller->invoke($request);
					break;
				case 'utente':
					$controller = new ControllerUtente();
					$controller->invoke($request);
					break;
				case 'amm':
					$controller = new ControllerAmm();
					$controller->invoke($request);
					break;
				default:
					break;
				
			}
		}
	}
?>


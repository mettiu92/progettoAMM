<?php
	
	
	include_once("Model/Model.php");
	
	class Model 
	{
		public function getlogin()
 		{
			//echo ' getLogin /';
  			if(isset($_REQUEST['user']) && isset($_REQUEST['password'])) //se esistono
			{
  				if($_REQUEST['user']=='matteo' && $_REQUEST['password']=='0000') //controllo utente
				{
					// entra come utente 
    				$_SESSION['stato']="utente";
					$_SESSION['user']=$_REQUEST['user'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=utente&com=utente");
   				}
				else
				if($_REQUEST['user']=='admin' && $_REQUEST['password']=='1111') //controllo utente
				{
					//entra come admin;
					$_SESSION['stato']="amm";
					$_SESSION['user']=$_REQUEST['user'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=amm&com=amm");
   				}
  			}
		}
		
		public function getlogout()
		{
			$_SESSION = array();
        	        session_destroy();
			header("Location: index.php?page=login");
		}	

		
		
	}
?>

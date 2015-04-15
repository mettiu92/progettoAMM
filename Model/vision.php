<?php

	
	include_once("Model/vision.php");

	class Vision 
	{

		public function setUtente()
		{       echo "utente";
			$sidebarsx = "View/User/sidebarsx.php";
			$content = "View/User/content.php";
			$sidebardx ="View/User/sidebardx.php";
			$_SESSION['pagina']='utente';
			include ("View/Master.php");
		}

		public function setAmm()
		{	echo "amministratore";
			$sidebarsx = "View/Admin/sidebarsx.php";
			$content = "View/Admin/content.php";
			$sidebardx ="View/Admin/sidebardx.php";
			$_SESSION['pagina']='amm';
			include ("View/Master.php");
		}

		public function setLogin()
		{       
			$sidebarsx = "View/Homepage/sidebarsx.php";
			$sidebardx ="View/Homepage/sidebardx.php";
			$content = "View/Homepage/content.php";
			$_SESSION['pagina']='login';
			include ("View/Master.php");
		}

		public function setAcquisti()
		{       
			$sidebarsx = "View/User/sidebarsx.php";
			$sidebardx ="View/User/sidebardx.php";
			$content = "View/User/acquisti.php";
			$_SESSION['pagina']='acquisti';
			include ("View/Master.php");
		}

		
	}

?>

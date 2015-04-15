<!DOCTYPE html>

<html>
	<head>
		<title> progetto - amm - login </title>
		<meta content="text/html; charset=utf-8" http-equiv="content-type"></meta>
		<link media="screen" type="text/css" rel="stylesheet" href="css/miostile.css"></link>
	</head>
	<body>
		
		<div id="tutto"><!-- è il div che contiene tutti gli altri div -->
			<header><!-- contiene un div con una lista di link --> 
				<div id="menu-header">
					<ul>
						<li> <a href="https://www.facebook.com/" target="_blank"> <b>Facebook </b> </a> </li>
						<li> <a href="https://twitter.com/" target="_blank"> <b>Twitter</b> </a> </li>
						<li> <a href=""> <b>Home</b> </a> </li>
					</ul>
				</div>
			</header>
			<div id="sidebarsx"><!-- rappresenta la sidebar di sinistra che contiene una lista di link -->	
				<?php
						require($sidebarsx);
					?>
			</div>
			<div id="sidebardx"><!-- rappresenta la sidebar destra che contiene delle "istruzioni per l'uso" -->
				<?php
						require($sidebardx);
					?>
				
			</div>
			<div id="content"><!--contiene un form per decidere se accedere alla pagina da acqirente o da venditore-->
				</br>
				</br>
				<?php
						require($content);
					?>	
					
			</div>
			<div id="clear"><!-- evita che le sidebar si addossino al footer -->
			</div>
			<footer>
				<div id="footer">
					sito per l'esame di amm
				</div>
			</footer>	
		</div>
	</body>
</html>

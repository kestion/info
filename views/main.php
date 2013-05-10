<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Kestion - Calypso Skinner</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="fr" />
		
		<link rel="stylesheet" type="text/css" href="assets/styles/main.css" />
		
		<script type="text/javascript" src="assets/scripts/jquery.js"></script> 
		<script type="text/javascript" src="assets/scripts/script.js"></script> 
		
	</head>
	
	<body>
			
			<header>
				
				<?php include 'templates/main/header.php'; ?>
				
			</header>
			
			<div id="content">
					
				<?php
						
					if(isset ($template))
					{
						include 'templates/'.$template.'.php';
					}
					else 
					{
						include 'templates/home.php';
					}
				?>
					
			</div>
			
			<footer>
				
				<?php include 'templates/main/footer.php' ?>
				
			</footer>
		
	</body>
	
</html>
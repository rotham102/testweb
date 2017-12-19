<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<script src="styles/scripts.js"></script>

	<title>Amanda M. Roth</title>
</head>

<body>
<!--nav-->
<div class="wrapper">
	<div class="nav">
	  <div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="about.php">About</a>
		  <a href="#">Contact</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span><br>
	</div><!--nav-->
	<div class="nav-afterspace"></div>
<!--header-->
	<div class="header">
		<div class="site-badge">
			<img src="images/profile.png"/>
		</div>
   		<h1><strong>NICE TO MEET YOU.</strong></h1>
    </div><!--header-->
        
        <?php foreach($about as $aboutinfo): ?>
			<div class="about-content">
				<div class="about-info">
					<?= "aboutme"; ?>
					<?= "resume"; ?>
				</div>
			</div>
    	<?php endforeach; ?>

    
</div><!--wrapper-->
</body> 
</html>
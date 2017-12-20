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
		<p class="about-p">Hello, my name is <span class="about-blue">Amanda.</span> I'm a graphic designer and a serial enthusiast. Outside of design, my current obsessions surround researching and creating historical fashion and costumery and studying small-scale, sustainable architecture. I also love to sing and enjoy learning to play new instruments. My employers, past professors, and peers know me to work efficiently, value constructive criticism, and face any and all challenges with an open mind and eager attitude.</p>
        <?php foreach($about as $aboutinfo): ?>
			<div class="about-content">
				<div class="about-info">
					<div class="resume1">
						<?= $aboutinfo ['resume1-section1']; ?>
						<?= $aboutinfo ['resume1-adobe-list']; ?>
						<?= $aboutinfo ['resume1-list']; ?>
					</div><!--resume1-->
					<div class="resume2"><?= $aboutinfo ['resume2']; ?></div>
				</div>
			</div>
    	<?php endforeach; ?>
    
</div><!--wrapper-->
</body> 
</html>
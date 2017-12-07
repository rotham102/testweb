<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.typekit.net/rpu5kiz.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<script src="styles/scripts.js"></script>
	
	<title>Amanda M. Roth</title>
</head>

<body>
<!--header-->
	<div class="wrapper">
		<div class="header">
			<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="#">Home</a>
			  <a href="#">About Me</a>
			  <a href="#">Contact</a>
			</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span>
		<h1><img src="images/icon.png"/><br/><br/><?= $greeting; ?></h1>
		</div>
		
<!--work-->
		<div class="content">
			<a href="#">
			  <img src="images/ecoh-cards.jpg" class="image">
				<div class="overlay">
					<div class="text">Emmanuel City of Hope Branding</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/raymondkinsman-cover.jpg" class="image">
				<div class="overlay">
					<div class="text">Raymond Morton Kinsman</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/art370-cards.jpg" class="image">
				<div class="overlay">
					<div class="text">Personal Projects</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/play-it-as-it-lays.jpg" class="image">
				<div class="overlay">
					<div class="text">Graduate Thesis Book Design</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/nightwarden-logo.jpg" class="image">
				<div class="overlay">
					<div class="text">Textron Systems Nightwarden</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/helios-front.jpg" class="image">
				<div class="overlay">
					<div class="text">Branding Design Project</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/reslife-voice-volumes-poster.jpg" class="image">
				<div class="overlay">
					<div class="text">Voice Speaks Volumes Campaign</div>
				</div>
			</a>
		</div>
	
		<div class="content">
			<a href="#">
			  <img src="images/tattoo-cards-front.jpg" class="image">
				<div class="overlay">
					<div class="text">Tattoo ABC Cards</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/cookbook.jpg" class="image">
				<div class="overlay">
					<div class="text">Cookbook Layout Design</div>
				</div>
			</a>
		</div>
		<div class="content">
			<a href="#">
			  <img src="images/reslife-academic-pamphlet-cover.jpg" class="image">
				<div class="overlay">
					<div class="text">Academic Resources Pamphlet</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>
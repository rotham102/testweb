<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.typekit.net/rpu5kiz.css">
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
		  <a href="#">About Me</a>
		  <a href="#">Contact</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span><br>
	</div>
	<div class="nav-afterspace"></div>
<!--header-->
	<div class="header">
		<div class="site-badge">
			<img src="images/icon.png"/>
		</div>
		<h1><?= $greeting; ?></h1>
	</div>

<!--work-->
		<?php foreach($arr as $item): ?>
		<div class="content">
			<a href="<?= $item['link']; ?>">
			  <img src="<?= $item['img']; ?>" class="image">
				<div class="overlay">
					<div class="text"><?= $item['desc']; ?></div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
</div>
<!--modal
<div class="modal">
		<div class="modal__box">
				<div class="works-back"><a href="#">&#9664</a></div>
				<div class="works-next"><a href="ray-kinsman.php">&#9654</a></div>
				<div class="work-content">
							<div class="nav-afterspace"></div>
								<h1>Emmanuel City of Hope</h1>
								<p> This was a <strong>branding</strong> and <strong>web design</strong> project for a newly established ministry in my community. The clients envisioned a modern logo design with subtle religious imagery, and requested that it feature deep pinks and blues. Their website is currently under construction.</p>
	
					<img src="images/ecoh-cards.jpg">	
					<img src="images/ecoh-logo-white.jpg">
					<img src="images/ecoh-logo-blue.jpg">  
					<div class="works-mobile-margin"></div>     
				</div>
							<div class="works-mobile-footer">
												<button class="prev"><a href="#">&#9664</a></button>
												<button class="next"><a href="ray-kinsman.php">&#9654</a></button>
								</div>
		</div>
</div>-->

</body>
</html>
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
<!--nav-->
<div class="wrapper">
	<div class="nav">
	  <div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="#">Home</a>
		  <a href="#">About Me</a>
		  <a href="#">Contact</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span><br>
	</div>
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
			<a href="#">
			  <img src="<?= $item['img']; ?>" class="image">
				<div class="overlay">
					<div class="text"><?= $item['disc']; ?></div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
</div>
</body>
</html>

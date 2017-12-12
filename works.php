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
<style>
	
	
	
	
</style>
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
        <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span>
        <a href="index.php"><img class="work-icon" src="images/icon.png"></a>
    </div>
<!--header-->

<!--work-->
		<div class="work-desc">
		<div class="nav-afterspace-imgs"></div>
			<h1>Emmanuel City of Hope</h1>
            <p> This was a <strong>branding</strong> and <strong>web design</strong> project for a newly established ministry in my community. The clients envisioned a modern logo design with subtle religious imagery, and requested that it feature deep pinks and blues. Their website is currently under construction.</p>
            <hr/>
            <button>NEXT PROJECT</button>
            <div class="nav-afterspace-imgs"></div>	
		</div>
		<div class="work-imgs">
            <?php foreach($ecoh as $img): ?>
			  <img src="<?= $img['piece']; ?>">
			</a>
		</div>
		<?php endforeach; ?>
		</div>
</div>
</body>
</html>

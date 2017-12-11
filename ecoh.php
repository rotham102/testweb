<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.typekit.net/rpu5kiz.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<script src="styles/scripts.js"></script>

	<title>Amanda M. Roth</title>
</head>
<body>
    <div class="wrapper">
<!--NAV-->
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
<!--END NAV-->
        <div class="work-desc">
            <h1>Emmanuel City of Hope</h1>
            <p><?php
                $lipsum = file_get_contents('http://loripsum.net/api/3/short');
                echo "$lipsum";
            ?></p>
            <button>NEXT PROJECT</button>
        </div>
        <div class="work-imgs">
                <img src = "images/ecoh-cards.jpg">
                <img src = "images/ecoh-logo-white.jpg">
                <img src = "images/ecoh-logo-blue.jpg">
        </div>
        
    </div>
</body>

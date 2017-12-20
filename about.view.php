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

		<div class="about-content">
			<p>Hello, my name is <span class="about-red">Amanda.</span> I'm a graphic designer and a serial enthusiast. Outside of design, I obsess over historical fashion and costumery and research sustainable, alternative architecture. I also love to sing and I love teaching myself new instruments. My employers, past professors, and peers know me to work efficiently, value constructive criticism, and face any and all challenges with an open mind and eager attitude.</p>
		</div><!--about-content-->
			<div class="experience-info">
					<div class="resume1">
						<div class="about-blue-box">
							<p><?= $skillstitle ?></p>
						</div>
						<p><?= $adobes ?></p>
						<?php foreach($adobelist['images'] as $adobeicons): ?>
							<img src="<?= $adobeicons; ?>">
						<?php endforeach; ?>
						<div class="about-blue-box">
							<p><?= $education ?></p>
						</div>
							<p><strong>BFA Design | BA Media & Communications</strong><br/>University of Maryland, Baltimore County</p>
					</div><!--resume1-->
			</div>	
			<div class="experience-companies">
					<div class="resume2">
						<div class="about-blue-box">
							<p><?= $experiencetitle; ?></p>
						</div>
					<?php foreach($resume as $section): ?>
						<div class="work-experience">
							<p><strong><?= $section['jobtitle']; ?></strong></p>
							<p><span class="blue-italic"><?= $section['companyname']; ?></span><span class="date-grey">&nbsp; | &nbsp;<?= $section['date']; ?></span></p>
							<p><span class="jobdesc"><?= $section['jobdesc']; ?></span></p>
						</div>
					<?php endforeach; ?>
					</div>
			</div>
</div><!--wrapper-->
</body> 
</html>
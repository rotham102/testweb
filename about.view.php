<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<script src="js/scripts.js"></script>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.amandaroth.net" />
	<meta property="og:title" content="Amanda M. Roth" />
	<meta property="og:image" content="/images/site-thumbnail.jpg" />
	<meta property="og:description" content="Hi, my name is Amanda Roth. I am a graphic designer with a full scope of experience designing for print and web. Check out my work and learn a bit about me!" />

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
		  <a href="contact.php">Contact</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span>
		<span class="nav-badge"><a href="index.php"><img width="50px" src="images/icon.png"></a></span>
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
			<p>Hello, my name is <span class="about-red">Amanda.</span> I'm a well rounded designer with a strong background in print and digital design, web design, motion graphics, and illustration. So far in my career journey, I've had the chance to work with global brands and collaborate with in-house design and marketing teams.</p>

			<p>I am a serial enthusiast and I love to learn new things. Outside of work, I enjoy researching and creating historical fashion and costumery, and studying small-scale, sustainable architecture. I also love to sing and enjoy learning to play new instruments. My employers, mentors, and peers know me to work efficiently, value constructive criticism, and face any and all challenges with an open mind and eager attitude.</p>
		</div><!--about-content-->
					<div class="skills">
						<div class="skills-content">
								<h1><?= $skillstitle ?></h1>
							<p><?= $adobes ?></p>
							<?php foreach($adobelist['images'] as $adobeicons): ?>
								<img src="<?= $adobeicons; ?>">
							<?php endforeach; ?>
							<p><?= $webskills ?></p>
						</div><!--skills-content-->
					</div><!--skills-->
					
					<div class="experience">
						<div class="experience-content">
							<h1><?= $experiencetitle; ?><!--<span class="expand"><?= $expand; ?></span>--></h1>
							<?php foreach($resume as $section): ?>
								<div class="work-experience">
									<p><strong><?= $section['jobtitle']; ?></strong></p>
									<p><span class="blue-italic"><?= $section['companyname']; ?></span><span class="date-grey">&nbsp; | &nbsp;<?= $section['date']; ?></span></p>
									<p><span class="jobdesc"><?= $section['jobdesc']; ?></span></p>
								</div>
							<?php endforeach; ?>
						</div><!--experience-content-->
					</div><!--experience-->
					
					<div class="education">
						<div class="education-content">
							<h1><?= $education ?></h1>
							<p><strong>Bachelor of Fine Arts</strong> &mdash; Design <br/> <strong>Bachelor of Arts</strong> &mdash; Media & Communications</p><p><em>2013 - 2017</em> &mdash; University of Maryland, Baltimore County</p>
						</div><!--education-content-->
					</div><!--education-->	
					
</div><!--wrapper-->
</body> 
</html>
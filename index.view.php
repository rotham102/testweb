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
			<a href="#openModal<?= $item['name']; ?>">
			  <img src="<?= $item['img']; ?>" class="image">
				<div class="overlay">
					<div class="text"><?= $item['desc']; ?></div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
</div>
<<<<<<< HEAD
<!--modal-->
<?php for($i = 0; $i < count($arr); $i++): ?>
	<?php $item = $arr[$i]; ?>
	<div id="openModal<?= $item['name']; ?>" class="modalDialog">
		<?php $prev = $i-1 >= 0 ? $arr[$i-1] : $arr[count($arr)-1]; ?>
		<?php $next = $i+1 < count($arr) ? $arr[$i+1] : $arr[0]; ?>

		<?php if($prev): ?>
			<div class="works-back"><a href="#openModal<?= $prev['name']; ?>">&#9664</a></div>
		<?php endif; ?>

		<?php if($next): ?>
			<div class="works-next"><a href="#openModal<?= $next['name']; ?>">&#9654</a></div>
		<?php endif; ?>		
			<div class="work-content">
			<a href="#close" title="Close" class="close">&#10005;</a>
				<h1><?= $item['desc']; ?></h1>
				<p><?= $item['writeup']; ?></p>
				<?php foreach($item['works'] as $work): ?>
					<img src="<?= $work; ?>">	
				<?php endforeach; ?>
				<?php foreach($item['video'] as $vid): ?>
				<div class="video"><?= $vid; ?></div>
				<?php endforeach; ?>
				<div class="works-mobile-margin"></div>     
			</div>
			<div class="works-mobile-footer">
			<?php if($prev): ?>
				<button class="prev"><a href="#openModal<?= $prev['name']; ?>">&#9664</a></button>
			<?php endif; ?>	
			<?php if($next): ?>
				<button class="next"><a href="#openModal<?= $next['name']; ?>">&#9654</a></button>
			<?php endif; ?>	
			</div>
	</div>
	<?php endfor; ?>

=======
>>>>>>> parent of 7fe73ed... THERE IS NO HOPE. HOW DO I DO MODALS
</body>
</html>

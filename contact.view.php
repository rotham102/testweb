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
		  <a href="contact.php">Contact</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="nav-button" src="images/nav-menu.png"/> <p class="menu">MENU</p> </span>
		<span class="nav-badge"><a href="index.php"><img width="50px" src="images/icon.png"></a></span>
	</div><!--nav-->
	<div class="nav-afterspace"></div>
<!--header-->
	<div class="header">
		<div class="site-badge">
			<img src="images/contact-icon.png"/>
		</div>
   		<h1><strong>WANT TO TALK?</strong></h1>
	</div><!--header-->
	<div class="contact">
		<div class="contact-content">
			<div class="linkedin">
				<img src="images/linkedin-logo.png">
				<a href="https://www.linkedin.com/in/amanda-roth-4960ab94/">
				<button>
					<p>Check Out My LinkedIn</p>
				</button>
				</a>
			</div><!--linkedin-->
			<div class="form-area">
				<p>Send me an email!<br/>
					<span class="email"><em>to: rotham102@gmail.com</em></span>
				</p>
					<form action="mailto:rotham102@gmail.com" method="post" enctype="text/plain" class="contact-form">
						<p>Name:</p>
						<input type="text" name="name"><br>
						<p>E-mail:</p>
						<input type="text" name="mail"><br>
						<p>Message:</p>
						<textarea rows="10" cols="30" type="text" name="comment"></textarea><br><br>
						<input type="submit" value="Send" class="send">
					</form>
			</div><!--form-area-->
		</div><!--contact--->
	</div>	
					
</div><!--wrapper-->
</body> 
</html>
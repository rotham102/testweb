<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.typekit.net/rpu5kiz.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<!--bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--#-->
	<title>Amanda M. Roth</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<ul>
				<li class="nav"><?= file_get_contents("images/nav-menu.svg"); ?></li>
				<li class="title"><h1><?= $greeting; ?></h1></li>
				</ul>
			</div>
		</div>
		
		<!--desktop-->
		<div class="row">
			<?php for($i = 0; $i < 8; $i++): ?>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<img width="100%" height="100%" src="images/helios-front.jpg">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<img width="100%" height="100%" src="images/cookbook.jpg">
				</div>
			<?php endfor; ?>
		</div>
	</div>
</body>
</html>
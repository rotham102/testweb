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
    <div class="wrapper">
    <?php foreach($works as $piece): ?>
        <div class="work-desc">
            <h1><?= $piece['name']; ?></h1>
            <p><?php
                $lipsum = file_get_contents('http://loripsum.net/api/3/short');
                echo "$lipsum";
            ?></p>
        </div>
        <div class="work-imgs">
                <img src = "<?= $piece['piece']; ?>">
                <img src = "<?= $piece['piece']; ?>">
                <img src = "<?= $piece['piece']; ?>">
        </div>
    <?php endforeach; ?>
    </div>
</body>

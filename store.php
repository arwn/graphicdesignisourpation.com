<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>memes go here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/store.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
</head>
<body>
<?php
include('navbar.php');
make_header('store');
?>
<div class="store">
	<h1>PURCHASE OUR CHEAP SERVICE!</h1>
	<p>Nonrefundable.</p>
	<?php
	$files = glob('database/*');
	foreach($files as $file) {
		echo '<div class="item">';
		echo '<h2>' . preg_replace('/database\//', '', $file) . '</h2>';
		readfile($file);
		echo '</div>';
	}
	?>
</div>
</body>
</html>

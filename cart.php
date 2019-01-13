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
    <script src="main.js"></script>
</head>
<body>
<?php
include('navbar.php');
make_header('cart');
?>
<div class="store">shop here</div> <!-- todo: make cart populate -->
</body>
</html>

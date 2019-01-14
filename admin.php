<?php
session_start();
include('navbar.php');
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
make_header('admin');
?>
<div class="store">
<h1>Hello admen.</h1>
<p>admin page</p>
Tags<input type="text" name="t">
<button type="add">APPLY</button>
<p>
User:
<input list="users">
<datalist id="users">
<?php	$userlist = array("one", "test user", "test 3");
	foreach($userlist as $user) {
		echo '<option value="';
		echo $user;
		echo '">';
	}
?>
<option value=".$user">
</datalist>
<button type="Delete">DELET!!!!!@!</button>
<button type="adminify">adminn pls</button>
</p>
</body>
</html>

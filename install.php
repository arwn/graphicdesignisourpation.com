<?php
$dir = "privdb";
$file = "users";

$accounts = array();

$admin = [
	"login" => "masa",
	"passwd" => hash("whirlpool", "thepassword"),
	"isadmin" => 1,
];

$accounts[] = $admin;

if (!file_exists($dir))
	mkdir($dir);
if (!file_exists($dir."/".$file))
	file_put_contents($dir."/".$file, serialize($accounts));
?>

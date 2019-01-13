<?php
$dir = "privdb";
$file = "users";

$accounts = array();

$admin = [
	"login" => "massa",
	"passwd" => hash("whirlpool", "thepassword"),
];

$accounts[] = $admin;

if (!file_exists($dir))
	mkdir($dir);
if (!file_exists($dir."/".$file))
	file_put_contents($dir."/".$file, serialize($accounts));
?>

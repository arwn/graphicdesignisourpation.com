<?php
session_start();

include "auth.php";
function login(){
	if (isset($_POST["login"]) && isset($_POST["passwd"]))
	{
		$login = $_POST["login"];
		$passwd = $_POST["passwd"];

		if (auth($login, $passwd))
		{
			$_SESSION["logged_on_user"] = $login;
			echo "OK\n";
		}
		else
		{
			$_SESSION["logged_on_user"] = "";
			echo "ERROR\n";
		}
	}
	else
	{
		echo '<form name="login.php" action="login.php" method="POST">';
		echo 'Username: <input name="login" value="" />';
		echo 'Password: <input name="passwd" value="" />';
		echo '<input type="submit" name="submit" value="OK" />';
		echo '</form>';
		echo "</ul>\n";
		echo "</div>\n";
	}
}

?>

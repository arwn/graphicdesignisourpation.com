<?php
session_start();

function put_login_form()
{
	echo '<form name="login.php" action="store.php" method="POST">';
	echo 'Username: <input name="login" value="" />';
	echo 'Password: <input name="passwd" value="" />';
	echo '<input type="submit" name="submit" value="signin" />';
	echo '<input type="submit" name="submit" value="sign up" />';
	echo '</form>';
}

function put_welcome()
{
	echo "welcome ".$_SESSION['logged_on_user'];
	echo '<form name="loginout.php" action="store.php" method="POST">';
	echo '<input type="submit" name="logout" value="logout" />';
	echo '</form>';
}

function logout()
{
	$_SESSION["logged_on_user"] = "";

}

include "auth.php";
function login(){
	if (isset($_POST["logout"]) && $_POST["logout"] == "logout")
	{
		logout();
		put_login_form();
	}
	else if (isset($_SESSION["logged_on_user"]) && $_SESSION["logged_on_user"])
	{
		put_welcome();

	}
	else if (isset($_POST["login"]) && isset($_POST["passwd"]) && $_POST["submit"]=="signin")
	{
		$login = $_POST["login"];
		$passwd = $_POST["passwd"];

	
		if (auth($login, $passwd))
		{
			$_SESSION["logged_on_user"] = $login;
			put_welcome();
		}
		else
		{
			$_SESSION["logged_on_user"] = "";
			echo "Sorry, Wront Username or password";
			put_login_form();
		}
	}
	else
	{
		put_login_form();

	}
}

?>
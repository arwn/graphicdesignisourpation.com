<?php

function elem_is_set($accounts, $login)
{
	$found = 0;
	foreach($accounts as $account)
	{
		if($account["login"] == $login)
			$found = 1;
	}
 	return $found;
}

function check_write_account()
{
	if (!$_POST["passwd"] || !$_POST["login"])
		return 0;

	$new_account = [
    "login" => $_POST["login"],
    "passwd" => hash("whirlpool", $_POST["passwd"]),
	];
	
	$accounts = unserialize(file_get_contents($dir."/".$file));

	if (elem_is_set($accounts, $_POST["login"]))
		return 0;
	else
	{
		$accounts[] = $new_account;
		file_put_contents($dir."/".$file, serialize($accounts));
		return 1;
	}
}

if ($_POST["submit"] == "OK")
{
	if (check_write_account())
		echo "OK\n";
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>

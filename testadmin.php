<?php
session_start();
include "dbfunc/prod_mod/add_prod.php";
function add_prod_elem(){
    echo '<html><body>'."\n";
    echo '<form name="addprod" action="'.$_SERVER['PHP_SELF'].'" method="POST">'."\n";
	echo 'product name: <input name="product" value="" />'."\n";
	echo '<br />'."\n";
    echo 'description: <input name="description" value="" />'."\n";
    echo '<br />'."\n";
	echo 'categories: <input name="categories" value="" />'."\n";
    echo '<input type="submit" name="submit" value="add product" />'."\n";
    echo '</form>'."\n";
    echo '</body></html>'."\n";
}

add_prod_elem();
$accounts = unserialize(file_get_contents("privdb/users"));

if (isset($_POST["submit"]) &&  $_POST["submit"] = "add product")
{
    echo add_prod($accounts, $_POST["product"], $_POST["description"], $_POST["categories"]);
}
?>


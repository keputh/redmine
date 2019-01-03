<?php

$dblocation = "127.0.0.1";
$dbuser = "root";
$dbname = "shop";
$dbpassswd = "";

$dbcnx = @mysql_connect($dblocation, $dbuser, $dbpassswd);
if(!dbcnx) {
	exit ("<p>не доступна база</p>");
}
if(!@mysql_select_db($dbname, $dbcnx)) {
	exit("<p>В настоящий момент база данных недоступна</p>");
}

@mysql_query("SET NAMES 'utf8_general_ci'");
	?>
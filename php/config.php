<?php //establishes connection to mysql server

$db_user = 'root';
$db_pass = 'MidnightV0lc@n0s';
$db_name = "mykindhome";

$db = new PDO('mysql:host = localhost;dbname='. $db_name .'; charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
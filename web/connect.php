<?php

$dbuser = 'postgres';
$host = 'localhost';
$dbname = 'calm-depths-42678';
$db = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser);

?>
<?php

$dbuser = 'postgres';
$host = '127.0.0.1';
$dbname = 'calm-depths-42678';
$db = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser);

?>
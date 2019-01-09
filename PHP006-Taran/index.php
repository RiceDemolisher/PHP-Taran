<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = 'Taran2001';
$db = 'database_01';

$dbh = new PDO('mysql:host='.$host. ';dbname='.$db. ':port='.$port, $user, $pass);
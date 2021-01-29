<?php
$hostdb = 'localhost';
$namedb = 'voetbalclubasd';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
?>
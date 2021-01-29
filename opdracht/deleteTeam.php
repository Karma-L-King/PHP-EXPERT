<?php
include "conn.php";
include "index.php";
$id = ($_GET['subject']);

$stmt = $conn->prepare("DELETE FROM teams WHERE id = '$id'");

$stmt->execute();
?>
<?php
include "conn.php";
include "teams.php";
include "index.php";


echo "<br>";
$id1 = ($_GET['subject']);

$stmt = $db_conn->prepare("SELECT * FROM teams WHERE id = '$id1'");

$stmt->execute();
while($row = $stmt->fetch()){
    $name = $row['naam'];
    $id = $row['id'];


    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "Naam:"."<input type='text' name='subject1' id='subject1' value='$name'>". "<br>";
    echo " <input type='submit'>";
}

$id1 = ($_GET['subject']);
$name1 = ($_GET['subject1']);

$stmt0 = $db_conn->prepare("UPDATE teams SET naam = '$name1' WHERE id = '$id1'");
$stmt0->execute();


?>
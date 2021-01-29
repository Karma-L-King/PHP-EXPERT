<?php
include "conn.php";
include "teams.php";
error_reporting(0);

echo "<br>";
$id = ($_GET['subject']);

$stmt = $conn->prepare("SELECT * FROM teams WHERE id = '$id'");


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  
}
$stmt->execute();
while($row = $stmt->fetch()){
    $naam = $row['naam'];
    $id = $row['id'];
    

    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "naam:"."<input type='text' name='subject1' id='subject1' value='$naam'>". "<br>";
    echo " <input type='submit'>";
}

$id1 = ($_GET['subject']);
$naam1 = ($_GET['subject1']);

$stmt0 = $conn->prepare("UPDATE teams SET naam = '$naam1' WHERE id = '$id'");
$stmt1 = $conn->prepare("UPDATE teams SET id = '$id1' WHERE id = '$id'");

$stmt0->execute();
$stmt1->execute();
?>

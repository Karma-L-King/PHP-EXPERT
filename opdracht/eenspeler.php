<?php
include "conn.php";
include "index.php";
error_reporting(0);

echo "<br>";
$id = ($_GET['subject']);

$stmt = $conn->prepare("SELECT * FROM gebruikers WHERE id = '$id'");


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  
}
$stmt->execute();
while($row = $stmt->fetch()){
    $voornaam = $row['voornaam'];
    $achternaam = $row['achternaam'];
    $email = $row['email'];
    $id = $row['id'];
    $wachtwoord = $row['wachtwoord'];
    $team = $row['team'];
    $contributie = $row['contributie'];

    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "Voornaam:"."<input type='text' name='subject1' id='subject1' value='$voornaam'>". "<br>";
    echo  "achternaam:"."<input type='text' name='subject2' id='subject2' value='$achternaam'>". "<br>";
    echo  "email:"."<input type='text' name='subject3' id='subject3' value='$email'>". "<br>";
    echo  "wachtwoord:"."<input type='text' name='subject4' id='subject4' value='$wachtwoord'>". "<br>";
    echo  "team:"."<input type='text' name='subject5' id='subject5' value='$team'>". "<br>";
    echo  "contributie:"."<input type='text' name='subject6' id='subject6' value='$contributie'>". "<br>";
    echo " <input type='submit'>";
}

$id = ($_GET['subject']);
$voornaam1 = ($_GET['subject1']);
$achternaam1 = ($_GET['subject2']);
$email1 = ($_GET['subject3']);
$wachtwoord1 = ($_GET['subject4']);
$team1 = ($_GET['subject5']);
$contributie1 = ($_GET['subject6']);

$stmt0 = $conn->prepare("UPDATE gebruikers SET voornaam = '$voornaam1' WHERE id = '$id'");
$stmt1 = $conn->prepare("UPDATE gebruikers SET achternaam = '$achternaam1' WHERE id = '$id'");
$stmt2 = $conn->prepare("UPDATE gebruikers SET email = '$email1' WHERE id = '$id'");
$stmt3 = $conn->prepare("UPDATE gebruikers SET wachtwoord = '$wachtwoord1' WHERE id = '$id'");
$stmt4 = $conn->prepare("UPDATE gebruikers SET team = '$team1' WHERE id = '$id'");
$stmt5 = $conn->prepare("UPDATE gebruikers SET contributie = '$contributie1' WHERE id = '$id'");

$stmt0->execute();
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();
?>

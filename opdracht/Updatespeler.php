<a href="index.php">Leden</a>
<a href="teams.php">Teams</a>

<?php

$hostdb = 'localhost';
$namedb = 'voetbalclubasd';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$id =$_POST['form_id'];
$voornaam = $_POST['form_voornaam'];
$achternaam = $_POST['form_achternaam'];
$email = $_POST['form_email'];
$wachtwoord = $_POST['form_wachtwoord'];
$team = $_POST['form_team'];
$contributie = $_POST['form_contributie'];


$sql = "INSERT INTO gebruikers (id, voornaam, achternaam,email, wachtwoord, team, contributie) VALUES (:ph_id , :ph_voornaam, :ph_achternaam,:ph_email,:ph_wachtwoord,:ph_team,:ph_contributie)" ;
$err = $stmt = $conn->prepare($sql); //stuur naar mysql.
if ( ! $err ) {
    echo "Error: $stmt";
}
$stmt->bindParam(":ph_id", $id ); //verbind de waardes
$stmt->bindParam(":ph_voornaam", $voornaam ); //verbind de waardes
$stmt->bindParam(":ph_achternaam", $achternaam ); //verbind de waardes
$stmt->bindParam(":ph_email", $email ); //verbind de waardes
$stmt->bindParam(":ph_wachtwoord", $wachtwoord ); //verbind de waardes
$stmt->bindParam(":ph_team", $team ); //verbind de waardes
$stmt->bindParam(":ph_contributie", $contributie ); //verbind de waardes
$stmt->execute();
$error = $stmt->errorCode();
echo $error;

?>

<form method="POST" action="Updatespeler.php">
    id: <input type="number" name="form_id">
    voornaam: <input type="text" name="from_voornaam">
    achternaam: <input type="text" name="form_achternaam">
    email: <input type="text" name="form_email">
    wachtwoord: <input type="text" name="form_wachtwoord">
    team: <input type="text" name="form_team">
    contributie: <input type="number" name="form_contributie">
  
  

  <input type="submit">
</form>

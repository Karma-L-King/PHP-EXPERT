<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';

$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$name = $_GET['form_name'];
$address = $_GET['form_address'];
$city = $_GET['form_city'];



$sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;
$err = $stmt = $conn->prepare($sql); //stuur naar mysql.
if ( ! $err ) {
    echo "Error: $stmt";
}
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_address", $address ); //verbind de waardes
$stmt->bindParam(":ph_city", $city ); //verbind de waardes
$stmt->execute();
$error = $stmt->errorCode();
echo $error;
?>

<form method="get" action="create_location.php">
  name: <input type="text" name="form_name">
  address: <input type="text" name="form_address">
  city: <input type="text" name="form_city">
  <input type="submit">
</form>

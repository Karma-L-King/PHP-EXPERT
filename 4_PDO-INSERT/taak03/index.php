<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';

$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$name = $_GET['form_name'];
$id = $_GET['form_id'];
$buy = $_GET['form_purchase_price'];
$sell = $_GET['form_selling_price'];



$sql = "INSERT INTO products (name, id, purchase_price, Selling_price) VALUES (:ph_name , :ph_id, :ph_purchase_price, :ph_selling_price)" ;
$err = $stmt = $conn->prepare($sql); //stuur naar mysql.
if ( ! $err ) {
    echo "Error: $stmt";
}
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_id", $id ); //verbind de waardes
$stmt->bindParam(":ph_purchase_price", $buy ); //verbind de waardes
$stmt->bindParam(":ph_selling_price", $sell ); //verbind de waardes
?>

<form method="get" action="index.php">
  name: <input type="text" name="form_name">
  purchase: <input type="number" required name="form_purchase_price" min="0" value="0" step="any">
  selling: <input type="number" required name="form_selling_price" min="0" value="0" step="any">
  <input type="submit">
</form>

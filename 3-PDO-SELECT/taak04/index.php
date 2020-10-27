<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';

    $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

    
    
      $result = $conn->prepare("SELECT * FROM locations WHERE city = 'Groningen'");
      $result->execute();

        while($row = $result->fetch()){
        $id = $row['id'];
        $name = $row['name'];
        $address = $row['address'];
        $city = $row['city'];
        
        echo $city ." ". $address ."<br>". $name ."<br>". $id;}

?>
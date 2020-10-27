<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';

    $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

    
    
      $result = $conn->prepare("SELECT * FROM users WHERE firstname = 'Mohamed'");
      $result->execute();

        while($row = $result->fetch()){
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        echo $firstname ." ". $lastname ."<br>". $email ."<br>". $id . "<br>". $password;}

?>
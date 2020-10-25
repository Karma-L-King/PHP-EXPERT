<?php

$databaseGegevens = array(

    
    array(
        'firstName' => 'Homer',
        'lastName'  => 'Simpson',
        'age'       => 38,
        'email'     => 'h.simpson@powerplant.com',
        'password'  => '$2y$10$GRFu3e7Rg5c.IiLYeC72U.fXqz0goX4oNtJxA5j7EwgYglGYQ9DdW',  //123
    ),

    // 1
    array(
        'firstName' => 'Bart',
        'lastName'  => 'Simpson',
        'age'       => 10,
        'email'     => 'b.simpson@tooltown.org',
        'password'  => '$2y$10$h.PtdZzhElIV16t9vMFuzel77pkwglWQxgdarW3tx6AAjathPiUsq' // Ay Caramba!
    ),

    // 2
    array(

        'firstName' => 'Marge',
        'lastName'  => 'Simpson',
        'age'       => 37,
        'email'     => 'm.simpson@home.springfield',
        'password'  => '$2y$10$f.F9QNBuVzyjM1H78JbjXexX8a7XK.ZoAIlc/El/6xVb6D7BY20gW' // L0vef@mily
    ),

    // 3
    array(
        'firstName' => 'Lisa',
        'lastName'  => 'Simpson',
        'age'       => 8,
        'email'     => 'l.simpson@tooltown.org',
        'password'  => '$2y$10$Q2Qiil4OmXTZVs.DnxhoxOtsbo2wGr10EVeKDvcDkwln1FkqRA07O' // 4WrLPz$"U.%5E5uB
    ),

    //4
    array(
        'firstName' => 'Montgomery',
        'lastName'  => 'Burns',
        'age'       => null,
        'email'     => 'mm.burns@powerplant.com',
        'password'  => '$2y$10$4lNKaLAetAWkEFB4aczEtuGi0Upm4yYKZtmTA8ZnxHliD.5gvgzU.' // GOAT_&_ROAT_ofcourse!
    ),
); //totale lengte array $databaseGegevens is 5.
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
<table border="1"><?php
    foreach($databaseGegevens as $databaseGegevens)
    {echo  "<tr>"."<th>". $databaseGegevens['firstName'] ."</th>"."</tr>".
        "<tr>"."<th>".$databaseGegevens['lastName'] ."</th>"."</tr>" .
        "<tr>". "<th>". $databaseGegevens['age']."</th>" ."</tr> " .
        "<tr>". "<th>". $databaseGegevens['email']."</th>"."</tr> " .
        "<tr>"."<th>". $databaseGegevens['password'] ."</th>". "</tr>" ;
} 
?>
</table>
</body>
</html>

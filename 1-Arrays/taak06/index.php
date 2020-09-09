<?php

$provincies = [
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking' => 'muggen',
        'inwoners_gemeente' => '2879611' ,
    ],
    [
        'provincie' => 'Zuid-Holland' ,
        'hoofdstad' =>'Den Haag',
        'bevolking' =>'hagenees',
        'inwoners_gemeente' => '3708585' ,
    ], 
    [
        'provincie' =>' Zeeland' ,
        'hoofdstad' => 'Middelburg',
        'bevolking' => 'maneblusser',
        'inwoners_gemeente' => '383519' ,
    ], 
    [
        'provincie' => 'Utrecht' ,
        'hoofdstad' => 'Utrecht',
        'bevolking' => 'Utrechter',
        'inwoners_gemeente' => '1354979' ,
    ]

];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}
?>
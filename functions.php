<?php
declare(strict_types=1);

require './variables.php';

// Tänker att man trycker på olika knappar som symboliserar olika arrayer så puttas de in i denna funktionen
function randomConceptGenerator($array_a, $array_b) {
    global $history;
    
    shuffle($array_a);
    $arrayitem_a = $array_a[0];
    shuffle($array_b);
    $arrayitem_b = $array_b[0];

    $history[] = $arrayitem_a . " " . $arrayitem_b;

    // $_SESSION['history'][] = $arrayitem_a . " " . $arrayitem_b; 



    echo "$arrayitem_a $arrayitem_b <br>";
}


function timeGenerator() {
$date = (mt_rand(0000000000, 9999999999));
$date = date('d M Y', $date );
echo $date;

}


function randomString() {
    $characters = 'abcdefghijklmnopqrstuvxyz';
    $randomString = '';
    $vowels = 'aeiou';
    $consonants = 'bcdfghjklmnopqrstvxyz';
    $n = rand(3, 8);

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    echo $randomString;

}









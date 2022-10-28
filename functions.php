<?php
declare(strict_types=1);

require './variables.php';

// Tänker att man trycker på olika knappar som symboliserar olika arrayer så puttas de in i denna funktionen
function randomConceptGenerator($array_a, $array_b) {
    shuffle($array_a);
    shuffle($array_b);

    $arrayitem_a = $array_a[0];
    $arrayitem_b = $array_b[0];

    global $generatedConcept;

    array_push($generatedConcept,$arrayitem_a, $arrayitem_b);






}


function timeGenerator() {
$date = (mt_rand(0000000000, 9999999999));
$date = date('d M Y', $date );

global $generatedConcept;

array_push($generatedConcept,$date);

}


function randomString() {
    $characters = 'abcdefghijklmnopqrstuvxyz';
    $randomString = '';
    $n = rand(3, 8);

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    global $generatedConcept;

    array_push($generatedConcept,$randomString);

}









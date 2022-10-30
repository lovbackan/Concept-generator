<?php

declare(strict_types=1);

require './variables.php';

// Tänker att man trycker på olika knappar som symboliserar olika arrayer så puttas de in i denna funktionen
function randomConceptGenerator(array $a, array $b)
{
    shuffle($a);
    shuffle($b);

    $arrayitem_a = $a[0];
    $arrayitem_b = $b[0];

    global $generatedConcept;

    array_push($generatedConcept, $arrayitem_a, $arrayitem_b);

    global $generatedConceptString;

    $generatedConceptString = implode(" ", $generatedConcept);
}


function timeGenerator()
{
    $date = (mt_rand(0000000000, 99999999999));
    $date = date('d M Y', $date);

    global $generatedConcept;

    array_push($generatedConcept, $date);

    global $generatedConceptString;

    $generatedConceptString = implode(" ", $generatedConcept);
}


function randomString()
{
    $characters = 'abcdefghijklmnopqrstuvxyz';
    $randomString = '';
    $n = rand(3, 7);

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    $randomString = ucfirst($randomString);

    global $generatedConcept;

    array_push($generatedConcept, $randomString);

    global $generatedConceptString;

    $generatedConceptString = implode(" ", $generatedConcept);
}


function randomName(array $a, array $b, array $c)
{
    shuffle($a);
    shuffle($b);
    shuffle($c);

    $arrayitem_a = $a[0];
    $arrayitem_b = $b[0];
    $arrayitem_c = $c[0];

    global $generatedConcept;

    array_push($generatedConcept, $arrayitem_a, $arrayitem_b, $arrayitem_c);

    global $generatedConceptString;

    $generatedConceptString = ucfirst(implode("", $generatedConcept));
}

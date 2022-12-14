<?php

declare(strict_types=1);

require './data.php';


function randomConceptGenerator(array $a, array $b)
{
    // Shuffles two arrays
    shuffle($a);
    shuffle($b);
    //Saves the first item in the shuffled array to a new variable
    $arrayitem_a = $a[0];
    $arrayitem_b = $b[0];

    global $generatedConcept;

    // Pushes the two new variables into the empty array $generated concept

    array_push($generatedConcept, $arrayitem_a, $arrayitem_b);

    global $generatedConceptString;

    // Converts the array into a string

    $generatedConceptString = implode(" ", $generatedConcept);
}

// This function randomizes a number and converts it with the date function to Day Month Year
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
    //Puts a randomized letter into the emtpy string $randomstring
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    // Converts the first letter into a capital letter
    $randomString = ucfirst($randomString);

    global $generatedConcept;

    array_push($generatedConcept, $randomString);

    global $generatedConceptString;

    $generatedConceptString = implode(" ", $generatedConcept);
}

// Shuffles 3 arrays and concattinates the first item in each array into one word
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

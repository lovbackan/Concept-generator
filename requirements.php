<?php
require './data.php';
require './functions.php';
require './starbackground.php';

// Depending on what button u press a certain function will be called upon and a $generatedConceptString will be created

if (isset($_POST['randomizer'])) {
    $submitValue = array_pop($_POST['randomizer']);
    if ($submitValue === 'Random Concept') {
        randomConceptGenerator($adjective, $noun);
    } else if ($submitValue === 'Random Time') {
        timeGenerator();
    } else if ($submitValue === 'Random Name') {
        randomName($phoneticsPre, $phoneticsMid, $phoneticsPost);
    } else if ($submitValue === 'Random String') {
        randomstring(10);
    }
};

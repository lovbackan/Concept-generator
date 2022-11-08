<?php
require './data.php';
require './functions.php';
require './starbackground.php';

// Depending on what button u press a certain function will be called upon and a $generatedConceptString will be created
if (isset($_POST['randomConcept'])) {
    randomConceptGenerator($adjective, $noun);
}

if (isset($_POST['randomTime'])) {
    timeGenerator();
}

if (isset($_POST['randomString'])) {
    randomstring(10);
}

if (isset($_POST['randomName'])) {
    randomName($phoneticsPre, $phoneticsMid, $phoneticsPost);
}

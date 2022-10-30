<?php

declare(strict_types=1);

$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarine', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];

$technologies = [
    'Solar',
    'Body modified',
    'Implant',
    'Holographic',
    'Modular',
    'Sentient',
    'Nano',
    'Carbon',
    'Synthetic',
    'Composit',
    'Biotic',
    'Bio',
    'Mechanical',
];


$parts = [
    'eyes',
    'paint',
    'horror',
    'deck',
    'circuit',
    'beam',
    'drive',
    'ship',
    'building',
];

$generatedConcept = [];

$generatedConceptString = "";


$phoneticsPre = [
    // Simple phonetics
    'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p',
    'qu', 'r', 's', 't',
    // Complex phonetics
    'bl',
    'ch', 'cl', 'cr',
    'dr',
    'fl', 'fr',
    'gl', 'gr',
    'kl', 'kr',
    'ph', 'pr', 'pl',
    'sc', 'sh', 'sl', 'sn', 'sr', 'st', 'str', 'sw',
    'th', 'tr',
    'br',
    'v', 'w', 'y', 'z'
];


$phoneticsMid = [
    // Simple phonetics
    'a', 'e', 'i', 'o', 'u',
    // Complex phonetics
    'ee', 'ie', 'oo', 'ou', 'ue'
];

$phoneticsPost = [
    // Simple phonetics
    'b', 'd', 'f', 'g', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'y',
    // Complex phonetics
    'ch', 'ck',
    'ln',
    'nk', 'ng',
    'rn',
    'sh', 'sk', 'st',
    'th',
    'x', 'z'
];

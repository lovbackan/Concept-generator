<?php

declare(strict_types=1);

//Array for the starry sky background

$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarine', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];

$adjective = [
    //Nature
    'Solar',
    'Star',
    'Chaotic',
    //Technology
    'Body modified',
    'Implant',
    'Holographic',
    'Haptic',
    'Augmented',
    'Modified',
    'Cyber',
    'Neural',
    //Concept
    'Modular',
    'Sentient',
    'Haphazardous',
    //Material
    'Nano',
    'Synthetic',
    'Composit',
    'Biotic',
    'Mechanical',
    'Organic',
    'Artificial',
    'Necrobiotic',
    'Chrome',
    'Bio',
    //Science
    'Phantom',
    'Sonic',
    'Genetic',
    'Introspective',
    'Distorted',
    'Cryotonic',
    'Cognetive',
];


$subjective = [
    //Body
    'eye',
    'brain',
    'cortex',
    'neuron',
    'vein',
    'spinal chord',
    'synpase',
    'cortisol',
    'adrenaline',
    //Diseases
    'mutation',
    'psychosis',
    'disfigurement',
    //Psychology
    'introspection',
    'persona',
    'blackout',
    //Nature
    'tree',
    'mycelium',
    'root',
    'wind',
    'sky',
    'world',
    'planet',
    'energy',
    'atom',
    'molecule',
    'seed',
    //Technology
    'monitor',
    'code',
    'machine',
    'deck',
    'circuit',
    'beam',
    'drive',
    'warp',
    'portal',
    'neuralyzer',
    'visualizer',
    'terminal',
    'wiring',
    'probe',
    'malfunction',
    'stimulant',
    //Other
    'neutralization',
    'singularity',
    'stack',
    'ship',
    'paint',
    'horror',
    'building',
    'ritual',
    'element',
    'oath',
    //Sciences
    'programming',
    'engineering',
    'calculus',
    'archaeology',
    'physics',
    'geology',
    'neurobiology',
    'psychology',
    'botany',
    'surgery',
    //Medicine
    'nootropics',

];

//These two are needed to create the generated strings. First the concept is added into the empty array then it is transformed into a string.

$generatedConcept = [];

$generatedConceptString = "";

//If u concatenateall three phoentics arrays to one string u will always get one pronounceable word/name.

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

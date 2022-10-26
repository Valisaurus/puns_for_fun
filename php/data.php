<?php


// multi-dimensional array about herbs
$herbPuns = [
    ['Author' => "Valle", 'pun' => "Vilken krydda gör att soldater i flottan doftar gott? Rosmarin."],

    ['Author' => "Valle", 'pun' => "Vilken krydda är den bästa cheerleadern? Peppar."],

    ['Author' => "Valle", 'pun' => "Vilken krydda blir aldrig solbränd? Vitlöken."],

    ['Author' => "Valle", 'pun' => "Vilken krydda kan ej hålla hemligheter? Sa alt."],

    ['Author' => "Valle", 'pun' => "Vilken dressing älskar alkohol? Vinäger."]
];

//determines what pun to show next
if (is_null($_SESSION['indexPuns'])) :
    $_SESSION['indexPuns'] = 0;
endif;


$catPuns = [
    "Vilken valuta betalar katter med? Kattmynta.", "Vilken kändis är katters favorit? Kattie Perry.", "Vilken rappare är katters favorit? Misse Elliot."
];


// $catPuns = [
//     ['Author' => "Valle", 'pun' => "Vilken valuta betalar katter med? Kattmynta."],

//     ['Author' => "Valle", 'pun' => "Vilken kändis är katters favorit? Kattie Perry."],

//     ['Author' => "Valle", 'pun' => "Vilken rappare är katters favorit? Misse Elliot."]
// ];


$celebritiePuns = [
    ['Author' => "Valle", 'pun' => "Vems HipHop konsert är billigast? 50 cent."],

    ['Author' => "Valle", 'pun' => "Vilken golfare äger farlig mark? Tiger Woods."],

    ['Author' => "Valle", 'pun' => "Vilken kändis har inga gäster på sitt skepp? Tom Cruise."],

    ['Author' => "Valle", 'pun' => "Vilken kändis tillverkar sommarskor? Adam Sandaler."],

    ['Author' => "Valle", 'pun' => "Vilken är Don Deminas favorit krydda? Anis."]
];



// $adeleInfo = [
//     'name' => 'Adele',
//     'img-url' => 'https://gaffa.blob.core.windows.net/gaffa-media/media/46b5d3c0-de2c-494e-9e95-6fcde5bfaf74/ABBAUtanPrisPaBritAwardsDarAdeleBlevDenStoraVinnaren-default.webp'
// ];



// multi-dimensional array










// $adelePuns = [
//     ['Author' => "Unknown", 'pun' => "Why did Adele cross the road? To say hello from the other side."],

//     ['Author' => "Unknown", 'pun' => "Why was Adele's phone bill $500 this month? She must have called a 1000 times."],

//     ['Author' => "Unknown", 'pun' => "What was the first computer to get a hit single? Adele."],

//     ['Author' => 'Unknown', 'pun' => "What did Adele name her sandwich shop?
//     A deli."]

// ];

// Adele Puns are brought from https://parade.com/1024249/marynliles/funny-puns/
//https://upjoke.com/adele-jokes



// multi-dimensional array


// $beyoncePuns = [
//     ['Author' => "Unknown", 'pun' => "What did Jay Z call Beyonce before they were married? Feyonce.."],

//     ['Author' => "Unknown", 'pun' => "What do you call a conversation with Beyonce from beyond the grave? Séonce."],

//     ['Author' => "Unknown", 'pun' => "What was the first computer to get a hit single? Adele."],

//     ['Author' => 'Unknown', 'pun' => "What did Adele name her sandwich shop?
//     A deli."]

// ];

// Adele Puns are brought from https://upjoke.com/beyonce-jokes
//https://punstoppable.com/beyonce-puns







// $ProgramingPuns = [

//     ['Author' => 'Unknown', 'pun' => 'Why was the programmer always running into walls? He couldn’t see sharp.'],

//     ['Author' => 'Unknown', 'pun' => 'What you call it when computer programmers make fun of each other? Cyber boolean.']


// ];

// Programing puns are brought from https://medium.com/agileactors/puns-only-programmers-will-get-8bdb961c327f
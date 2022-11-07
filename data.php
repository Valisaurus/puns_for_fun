<?php

declare(strict_types=1);

// associative multi-dimensional array about herbs
$herbPuns = [
    ['Author' => "Valle", 'pun' => "Vilken krydda gör att soldater i flottan doftar gott? Rosmarin."],

    ['Author' => "Valle", 'pun' => "Vilken krydda är den bästa cheerleadern? Peppar."],

    ['Author' => "Valle", 'pun' => "Vilken krydda blir aldrig solbränd? Vitlöken."],

    ['Author' => "Valle", 'pun' => "Vilken krydda kan ej hålla hemligheter? Sa alt."],

    ['Author' => "Valle", 'pun' => "Vilken dressing älskar alkohol? Vinäger."]
];

// associative multi-dimensional array about cats

$catPuns = [
    ['Author' => "Valle", 'pun' => "Vilken valuta betalar katter med? Kattmynta."],

    ['Author' => "Valle", 'pun' => "Vilken kändis är katters favorit? Kattie Perry."],

    ['Author' => "Valle", 'pun' => "Vilken rappare är katters favorit? Misse Elliot."],

    ['Author' => "Valle", 'pun' => "Vilken bil kör katter? Mjaudi."]
];


// associative multi-dimensional array about celebrities

$celebrityPuns = [
    ['Author' => "Valle", 'pun' => "Vems HipHop konsert är billigast? 50 cent."],

    ['Author' => "Valle", 'pun' => "Vilken golfare äger farlig mark? Tiger Woods."],

    ['Author' => "Valle", 'pun' => "Vilken kändis har inga gäster på sitt skepp? Tom Cruise."],

    ['Author' => "Valle", 'pun' => "Vilken kändis tillverkar sommarskor? Adam Sandaler."],

    ['Author' => "Valle", 'pun' => "Vilken är Don Deminas favorit krydda? Anis."]
];

//indexed array
$images = [
    'https://ecowarriorprincess.net/wp-content/uploads/2018/02/Sustainable-Living_-16-Herbs-That-An-Amateur-Green-Thumb-Can-Easily-Grow.png',

    'https://img.freepik.com/free-vector/cute-cat-cartoon-characters-illustrations-set-cats-with-heart-shaped-noses-happy-fluffy-kittens-smiling-orange-grey-kitties-sitting-white_74855-20523.jpg?w=2000',

    'https://www.the-sun.com/wp-content/uploads/sites/6/2022/05/COMPS-DD-CELEBCARTOON.jpg?w=1320'
];

//indexed array
$links = [
    'herbpuns.php',
    'catpuns.php',
    'celebritypuns.php'
];
//indexed array
$buttonInfo = [
    'KRYDD ORDVITSAR',
    'KATT ORDVITSAR',
    'KÄNDIS ORDVITSAR'
];


//indexed array who makes the border
$pixels = [
    0, 1, 0, 1, 0, 1, 0, 1,
    0, 1, 0, 1, 0, 1, 0, 1,
    0, 1, 0, 1, 0, 1, 0, 1,
    0, 1, 0, 1, 0, 1, 0, 1,
    0, 1, 0, 1, 0, 1, 0, 1,
    0, 1, 0, 1, 0, 1, 0, 1
];

//when a website opens, the  session starts on index 0.
if (!array_key_exists('indexPuns', $_SESSION)) :
    // array with index for herb, cat and celebrity puns. Index value starts on 0.
    $_SESSION['indexPuns'] = [
        'herb' => 0, 'cat' => 0, 'celebrity' => 0
    ];
endif;
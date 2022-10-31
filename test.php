<?php
require __DIR__ . '/data.php';

function getPuns(array $punsArray, string $indexValue)
{
    $_SESSION['indexPuns'][$indexValue]++;

    if ($_SESSION['indexPuns'][$indexValue] >= count($punsArray)) :
        $_SESSION['indexPuns'][$indexValue] = 0;
    endif;
    echo $punsArray[$_SESSION['indexPuns'][$indexValue]]['pun'];
}




// function that loops the puns array with foreach-loop
function herbPuns(array $herbPuns)
{
    $_SESSION['indexPuns']['herb']++;

    if ($_SESSION['indexPuns']['herb'] >= count($herbPuns)) :
        $_SESSION['indexPuns']['herb'] = 0;
    endif;
    echo $herbPuns[$_SESSION['indexPuns']['herb']]['pun'];
}


function catPuns(array $catPuns)
{
    $_SESSION['indexPuns']['cat']++;

    if ($_SESSION['indexPuns']['cat'] >= count($catPuns)) :
        $_SESSION['indexPuns']['cat'] = 0;
    endif;
    echo $catPuns[$_SESSION['indexPuns']['cat']]['pun'];
}


function celebertyPuns(array $celebertyPuns)
{
    $_SESSION['indexPuns']['celeberty']++;

    if ($_SESSION['indexPuns']['celeberty'] >= count($celebertyPuns)) :
        $_SESSION['indexPuns']['celeberty'] = 0;
    endif;
    echo $celebertyPuns[$_SESSION['indexPuns']['celeberty']]['pun'];
}



   // for ($i = 0; $i < count($catPuns); $i++) {
    //     return $catPuns[array_rand($catPuns)];
    // }


    //     foreach ($catPuns as $catPun) :
    //     endforeach;


    // function images(array $images)
    // {
    //     foreach ($images as $image) :
    //         echo $image[0];
    //     endforeach;
    // }


    // foreach ($herbPuns as $herbPun) :
    // shuffle($herbPun);
    // echo "$herbPun <br>";
    // endforeach;



//function that loops the name and picture with foreach-loop
// function AdeleName(array $adeleInfo)
// {
// echo $adeleInfo['name'];

// foreach ($adeleInfo as $adele) :
// // echo $value['name'];
// echo $adele['img-url'];
// endforeach;
// }

// function AdeleImg(array $adeleInfo)
// {
// echo $adeleInfo['img-url'];

// // foreach ($adeleInfo as $adele) :
// // // echo $value['name'];
// // echo $adele['img-url'];
// // endforeach;
// }


// //function that loops the puns array with foreach-loop
// function AdelePuns(array $adelePuns)
// {
// foreach ($adelePuns as $adelePun) :
// echo "$adelePun[pun] <br>";
// endforeach;
// }

// $adeleInfo = [
//     'name' => 'Adele',
//     'img-url' => 'https://gaffa.blob.core.windows.net/gaffa-media/media/46b5d3c0-de2c-494e-9e95-6fcde5bfaf74/ABBAUtanPrisPaBritAwardsDarAdeleBlevDenStoraVinnaren-default.webp'
// ];









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
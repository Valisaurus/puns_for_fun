<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// function to who gets puns and shows different one when updating the webpage

function getPuns(array $punsArray, string $indexValue)
{
    $_SESSION['indexPuns'][$indexValue]++;

    if ($_SESSION['indexPuns'][$indexValue] >= count($punsArray)) :
        $_SESSION['indexPuns'][$indexValue] = 0;
    endif;
    echo $punsArray[$_SESSION['indexPuns'][$indexValue]]['pun'];
}


// function which loops the author
function getAuthor(array $authorArray)
{
    global $catPuns;
    foreach ($catPuns as $catPun) :
        echo "<br> Alla ordvitsar är skrivna av:" . strtoupper($catPun['Author']) . "<br>";
    endforeach;
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
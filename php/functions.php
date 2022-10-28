<?php

declare(strict_types=1);

require __DIR__ . '/data.php';


// function that loops the puns array with foreach-loop
function herbPuns(array $herbPuns)
{
    $_SESSION['indexPuns']['herb']++;

    if ($_SESSION['indexPuns']['herb'] >= count($herbPuns)) :
        $_SESSION['indexPuns']['herb'] = 0;
    endif;
    echo $herbPuns[$_SESSION['indexPuns']['herb']]['pun'];


    // foreach ($herbPuns as $herbPun) :
    // shuffle($herbPun);
    // echo "$herbPun <br>";
    // endforeach;
}


function catPuns(array $catPuns)
{
    $_SESSION['indexPuns']['cat']++;

    if ($_SESSION['indexPuns']['cat'] >= count($catPuns)) :
        $_SESSION['indexPuns']['cat'] = 0;
    endif;
    echo $catPuns[$_SESSION['indexPuns']['cat']]['pun'];



    // for ($i = 0; $i < count($catPuns); $i++) {
    //     return $catPuns[array_rand($catPuns)];
    // }


    //     foreach ($catPuns as $catPun) :
    //     endforeach;
}


function celebritiePuns(array $celebritiePuns)
{
    $_SESSION['indexPuns']['celebritie']++;

    if ($_SESSION['indexPuns']['celebritie'] >= count($celebritiePuns)) :
        $_SESSION['indexPuns']['celebritie'] = 0;
    endif;
    echo $celebritiePuns[$_SESSION['indexPuns']['celebritie']]['pun'];
}


function images(array $images)
{
    foreach ($images as $image) :
        echo $image[0];
    endforeach;
}





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
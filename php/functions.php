<?php

declare(strict_types=1);

require __DIR__ . '/data.php';


// function that loops the puns array with foreach-loop
function herbPuns(array $herbPuns)
{


    $_SESSION['indexPuns']++;

    if ($_SESSION['indexPuns'] >= count($herbPuns)) :
        $_SESSION['indexPuns'] = 0;
    endif;
    echo $herbPuns[$_SESSION['indexPuns']]['pun'];






    // foreach ($herbPuns as $herbPun) :
    // shuffle($herbPun);
    // echo "$herbPun <br>";
    // endforeach;
}


function catPuns(array $catPuns)
{
    foreach ($catPuns as $catPun) :
        shuffle($catPun);
        echo "$catPun <br>";
    endforeach;
}


function celebritiePuns(array $celebritiePuns)
{
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
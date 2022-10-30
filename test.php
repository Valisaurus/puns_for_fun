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
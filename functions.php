<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// function who gets puns and shows different ones when updating the webpage

function getPuns(array $punsArray, string $indexValue)
{
    //determines what pun to show next and adds one 
    $_SESSION['indexPuns'][$indexValue]++;

    //if $indexvalue is >= then $_session will start on index 0 again
    if ($_SESSION['indexPuns'][$indexValue] >= count($punsArray)) :
        $_SESSION['indexPuns'][$indexValue] = 0;
    endif;
    echo $punsArray[$_SESSION['indexPuns'][$indexValue]]['pun'];
}


// function which loops the author and print it out from $catPuns array
function getAuthor(array $authorArray)
{
    global $catPuns;
    foreach ($catPuns as $catPun) :
        echo "<br> Alla ordvitsar är skrivna av:" . strtoupper($catPun['Author']) . "<br>";
    endforeach;
}


 
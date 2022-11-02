<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// function who gets puns and shows different ones when updating the webpage
function getPuns(array $punsArray, string $indexValue)
{
    //determines what pun to show next and adds one
    $_SESSION['indexPuns'][$indexValue]++;

    //if $indexvalue is >= of the number values in the arrays, then $_session will start on index 0 again
    if ($_SESSION['indexPuns'][$indexValue] >= count($punsArray)) :
        $_SESSION['indexPuns'][$indexValue] = 0;
    endif;
    echo $punsArray[$_SESSION['indexPuns'][$indexValue]]['pun'];
}


//function which loops the numbers to later make a board out of them
function border(array $pixels)
{ ?>
<?php foreach ($pixels as $pixel) : ?>
<div class="border">
    <?php if ($pixel === 0) { ?>
    <div class=" border-zero"></div>
    <?php } else { ?>
    <div class="border-one"></div>
    <?php } ?>
    <?php endforeach; ?>
</div>
<?php }


// function that puts JA as true and NEJ as false
function likedPuns()
{
    if ($_POST['likedPuns'] === "JA") {
        return true;
    } else {
        return false;
    }
}
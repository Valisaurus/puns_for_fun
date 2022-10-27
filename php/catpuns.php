<?php
session_start();

require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>

<div class="puns">
    <?php
    catPuns($catPuns);
    ?>
    <div class="button">
        <a href="catpuns.php">SHUFFLE PUN</a>
    </div>
</div>

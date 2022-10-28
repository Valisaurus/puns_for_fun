<?php

session_start();
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>
<main>
<section class="container">
<div class="puns">
    <?php
    celebritiePuns($celebritiePuns);
    ?>
</div>
<div class="button">
            <a href="/php/celebertypuns.php">SLUMPA ORDVITS</a>
        </div>
</section>
</main>
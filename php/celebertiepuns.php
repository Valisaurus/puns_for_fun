<?php

session_start();
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>

<div class>
    <?php
    celebritiePuns($celebritiePuns);
    ?>
</div>

<?php
session_start();
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';

// echo TEST("hello");
?>


<nav>
    <a href="/index.php">Home</a>
</nav>

<div class="grid">




    <a href="" class="button">Shuffle pun</a>
</div>

<div class="grid-item-text">

    <br> <?php herbPuns($herbPuns); ?>
    <br> <?php echo catPuns($catPuns); ?>




</div>
<div class="grid-item-text">
    <?php

    ?>
</div>
<div class="grid-item-text">
    <?php
    //AdelePuns($adelePuns);
    ?>
</div>

<div class="grid-item-text">
    <?php
    //AdelePuns($adelePuns);
    ?>
</div>
</div>
<?php
require __DIR__ . '/footer.php';

?>
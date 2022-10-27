<?php
session_start();

require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>


<!-- <nav>
    <a href="/index.php">Home</a>
</nav> -->

<div class="grid">

    <div class="grid-item-text">
        <img src="<?php echo $images[0] ?>" />
        <div class="button">
            <a href="herbpuns.php">KRYDD ORDVITSAR</a>
        </div>

    </div>

    <div class="grid-item-text">

        <img src="<?php echo $images[1] ?>" />
        <div class="button">
            <a href="catpuns.php">KATT ORDVITSAR</a>
        </div>

    </div>

    <div class="grid-item-text">
        <img src="<?php echo $images[2] ?>" />
        <div class="button">
            <a href="celebertypuns.php">KÄNDIS ORDVITSAR</a>
        </div>
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

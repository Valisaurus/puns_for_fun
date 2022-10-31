<?php
session_start();

require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';



?>

<main class="card">
    <section class="card-items">
        <div class="item-pun">
            <?php
            getPuns($catPuns, 'cat');
            ?>
        </div>
        <div class="button-shuffle">
            <a href="catpuns.php">SHUFFLE PUN</a>
        </div>

    </section>
</main>

<?php
require __DIR__ . '/footer.php';
?>




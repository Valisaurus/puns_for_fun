<?php
session_start();

require(__DIR__ . '/header.php');
require(__DIR__ . '/functions.php');
require(__DIR__ . '/data.php');
?>

<!-- calling on the getPuns function who shows the puns -->
<main class="card">
    <section class="card-items">
        <h2>KATT-ORDVITSAR</h2>
        <div class="item-pun">
            <?php
            getPuns($catPuns, 'cat');
            ?>
        </div>
        <!-- shuffle button who is a link but looks like a button -->
        <div class="button-shuffle">
            <a href="catpuns.php">SLUMPA ORDVITS</a>
        </div>

    </section>
</main>

<?php
require __DIR__ . '/footer.php';
?>
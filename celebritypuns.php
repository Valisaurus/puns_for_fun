<?php

session_start();
require(__DIR__ . '/header.php');
require(__DIR__ . '/functions.php');
require(__DIR__ . '/data.php');
?>
<!-- calling on the getPuns function who shows the puns -->
<main class="card">
    <section class="card-items">
        <h2>KÄNDIS-ORDVITSAR</h2>
        <div class="item-pun">
            <?php
            getPuns($celebrityPuns, 'celebrity');
            ?>
        </div>
        <!-- shuffle button who is a link but looks like a button -->
        <div class="button-shuffle">
            <a href="celebritypuns.php">SLUMPA ORDVITS</a>
        </div>
    </section>
</main>

<?php
require __DIR__ . '/footer.php';
?>
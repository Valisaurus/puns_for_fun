<?php
session_start();

require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>
<main class="container">

    <?php foreach ($images as $key => $image) { ?>
    <section class="container-items">
        <section class="item">
            <img src="<?php echo $image ?>" />
        </section>
        <section class="button">
            <a href="<?php echo $links[$key]; ?>"><?php echo $buttonInfo[$key]; ?></a>
        </section>
    </section>


    <?php } ?>
</main>

<?php require __DIR__ . '/footer.php'; ?>
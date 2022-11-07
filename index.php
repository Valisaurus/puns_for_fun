<?php
session_start();


require(__DIR__ . '/header.php');
require(__DIR__ . '/functions.php');
require(__DIR__ . '/data.php');

?>
<main class="container">
    <!-- foreach that loops through the images  -->
    <?php foreach ($images as $key => $image) { ?>
    <section class="container-items">
        <div class="item">
            <img src="<?php echo $image ?>" />
        </div>
        <!-- loops through the links and button information. The links looks like buttons, made by css -->
        <div class="button">
            <a href="<?php echo $links[$key]; ?>"><?php echo $buttonInfo[$key]; ?></a>
        </div>
    </section>
    <?php } ?>

    <!-- form that asks if puns where liked -->
    <!-- form is fetched from https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_radio and modified by me -->
    <div class="item">
        <form action="index.php" method="POST">
            <p>Gillade du ordvitsarna?</p>
            <input type="radio" id="JA" name="likedPuns" value="JA">
            <label for="html">JA</label><br> <br>
            <input type="radio" id="NEJ" name="likedPuns" value="NEJ">
            <label for="css">NEJ</label><br><br>
            <input type="submit" value="Svara"> <br><br>

            <!-- gives feedback on where you liked or disliked the puns  -->
            <?php
            if (isset($_POST['likedPuns'])) {
                if (likedPuns() === true) {
                    echo strtoupper("Thank you sweetie!");
                } else {
                    echo strtoupper("that's sad!");
                }
            }
            ?>

    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>

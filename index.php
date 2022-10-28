<?php
session_start();

require __DIR__ . '/php/header.php';
require __DIR__ . '/php/functions.php';
require __DIR__ . '/php/data.php';

?>


<!-- <nav>
    <a href="/index.php">Home</a>
</nav> -->

<div class="grid">

<?php foreach($images as $key => $image) { ?>
    <div class="grid-item-text">
        <img src="<?php echo $image ?>" />
<div class="button">
            <a href="<?php echo $links[$key];?>"><?php echo $buttonInfo[$key];?></a>
        </div>
       
</div>
    
<?php } ?>
</div> 

<?php require __DIR__ . '/php/footer.php';?>

<?php require "Layouts/Header.php"; ?>
<div class="container">

<?php foreach ($images as $image){ ?>
<div>
    <?php echo '<img src="resources\assets\\'.$image->getImage().'.png" />'; ?>
</div>
<?php } ?>
</div>
<?php require "Layouts/Footer.php";
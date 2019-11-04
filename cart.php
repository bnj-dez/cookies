<?php

session_start();

if ($_SESSION['name'] == null)
{
    header('location:index.php');
}

?>

<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">

<?php
if(isset($_COOKIE)) {
    foreach ($_COOKIE as $objects => $object) {
        foreach ($catalog as $id => $cookie) {
            if (intval($object) === $id) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>"
                             class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php }
        }
    }
}?>

</section>
<?php require 'inc/foot.php'; ?>

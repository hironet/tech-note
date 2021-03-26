<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
</header>
<div class="row">
<?php for ($i = 0; $i < count($titles) / 2; $i++) { ?>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <h5 class="card-title"><?= $titles[$i] ?></h5>
        <p class="card-text"><?= $descriptions[$i] ?></p>
        <a href="<?= $links[$i] ?>" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
<?php } ?>
</div><!-- row -->

<?php
include_once(__DIR__ . '/common/functions.php');
include_once(__DIR__ . '/common/routing.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once(__DIR__ . '/common/head.php'); ?>
</head>
<body>
  <header>
<?php include_once(__DIR__ . '/common/navbar.php'); ?>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
        <main>
<?php include_once(__DIR__ . $contents_path); ?>
        </main>
      </div><!-- col -->
      <div class="col-12 col-lg-3">
        <aside>
<?php include_once(__DIR__ . '/common/sidebar.php'); ?>
        </aside>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
  <hr class="featurette-divider">
  <footer>
<?php include_once(__DIR__ . '/common/footer.php'); ?>
  </footer>
<?php include_once(__DIR__ . '/common/script.php'); ?>
</body>
</html>

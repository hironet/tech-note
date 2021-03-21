<?php include_once(__DIR__ . '/functions.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once(__DIR__ . '/head.php'); ?>
</head>
<body>
  <header>
<?php include_once(__DIR__ . '/navbar.php'); ?>
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
<?php include_once(__DIR__ . '/sidebar.php'); ?>
        </aside>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
  <hr class="featurette-divider">
  <footer>
<?php include_once(__DIR__ . '/footer.php'); ?>
  </footer>
<?php include_once(__DIR__ . '/script.php'); ?>
</body>
</html>

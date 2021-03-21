<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href=".">ホーム</a>
    </li>
<?php
foreach ($breadcrumb_list as $breadcrumb => $url) {
  if (empty($url)) {
?>
    <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></li>
<?php
  } else {
?>
    <li class="breadcrumb-item">
      <a href="<?= $url ?>"><?= $breadcrumb ?></a>
    </li>
<?php
  }
}
?>
  </ol>
</nav>

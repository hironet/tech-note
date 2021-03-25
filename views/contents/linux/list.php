<?php
$ptime = '2021-03-22 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../../common/header.php'); ?>
</header>
<div class="row">
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Linuxコマンドの便利な使い方</h5>
        <p class="card-text">知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。</p>
        <a href=".?c=linux&p=command" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CentOS 7.x 設定方法</h5>
        <p class="card-text">CentOS 7.xを使用するにあたって、よく行う設定を紹介しています。</p>
        <a href=".?c=linux&p=centos7-setting" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
</div><!-- row -->

<?php
$ptime = '2021-04-01 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">ブランチ操作</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ブランチの一覧を確認する。</td>
        <td><pre class="inline"><code>$ git branch</code></pre></td>
      </tr>
      <tr>
        <td>ブランチを作成する。</td>
        <td><pre class="inline"><code>$ git branch [ブランチ名]</code></pre></td>
      </tr>
      <tr>
        <td>ブランチを切り替える。</td>
        <td><pre class="inline"><code>$ git checkout [ブランチ名]</code></pre></td>
      </tr>
      <tr>
        <td>ブランチの作成と切り替えを同時に行う。</td>
        <td><pre class="inline"><code>$ git checkout -b [ブランチ名]</code></pre></td>
      </tr>
      <tr>
        <td>ブランチをマージする。</td>
        <td><pre class="inline"><code>$ git checkout [マージ先のブランチ名]
$ git merge [マージ元のブランチ名]</code></pre></td>
      </tr>
      <tr>
        <td>ブランチを削除する。</td>
        <td><pre class="inline"><code>$ git branch -d [ブランチ名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div>

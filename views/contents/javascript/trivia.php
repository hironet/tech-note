<?php
$ptime = '2021-04-05 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h3 class="title">即時実行関数の書き方</h3>
<p>functionを使用する場合は、以下の2パターンのどちらでもよい。</p>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
}());</code></pre>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
})();</code></pre>
<p>アロー関数を使用する場合は、以下のように書く。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
})();</code></pre>
<p>以下の書き方はエラーになるので、注意が必要。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
}());</code></pre>

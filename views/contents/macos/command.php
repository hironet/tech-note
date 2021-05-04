<?php
$ptime = '2021-04-01 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">目次</h2>
<ul>
  <li>
    <a href="#pbcopy">pbcopy</a>
  </li>
  <li>
    <a href="#pbpaste">pbpaste</a>
  </li>
</ul>
<h3 id="pbcopy" class="title">pbcopy</h3>
<p>ターミナルへの入力内容をクリップボードにコピーする（入力の終了は<kbd>control + D</kbd>を押す）。</p>
<pre class="block"><code class="shell">$ pbcopy</code></pre>
<p>ファイルの内容をクリップボードにコピーする。</p>
<pre class="block"><code class="shell">$ pbcopy &lt; ~/.ssh/id_rsa.pub</code></pre>
<p>クリップボードを空にする。</p>
<pre class="block"><code class="shell">$ pbcopy &lt; /dev/null</code></pre>
<h3 id="pbpaste" class="title">pbpaste</h3>
<p>クリップボードからペーストする。</p>
<pre class="block"><code class="shell">$ pbpaste</code></pre>
<p>クリップボードから書式情報を削除する。</p>
<pre class="block"><code class="shell">$ pbpaste -Prefer txt | pbcopy</code></pre>

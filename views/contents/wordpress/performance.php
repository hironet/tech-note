<?php
$ptime = '2021-04-03 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h3 class="title">リビジョン削除</h3>
<p>データベース（MySQL）に接続し、以下SQLを実行する。</p>
<pre class="block"><code class="sql">USE wordpress;
SELECT COUNT(*) FROM wp_posts WHERE post_type='revision';
DELETE FROM wp_posts WHERE post_type='revision';
SELECT COUNT(*) FROM wp_posts WHERE post_type='revision';</code></pre>
<h3 class="title">wp-postsテーブルのフラグメント化解消</h3>
<p>データベース（MySQL）に接続し、リビジョンを削除した後、以下SQLを実行する。</p>
<pre class="block"><code class="sql">USE wordpress;
SELECT @@sql_mode;
SET sql_mode = '';
SELECT @@sql_mode;
OPTIMIZE TABLE wp_posts;</code></pre>

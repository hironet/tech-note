<?php
$ptime = '2021-05-05 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">Laravelのコマンド</h2>
<h3 class="title">バージョン確認</h3>
<p>Laravelのバージョンを確認する。</p>
<pre class="block"><code class="shell">$ php artisan --version</code></pre>
<h3 class="title">プロジェクト作成</h3>
<p>新しいプロジェクトを作成する。</p>
<pre class="block"><code class="shell">$ cd [プロジェクトを配置するディレクトリ]
$ composer create-project laravel/laravel [プロジェクト名] --prefer-dist
$ chown -R [Webサーバのユーザ名]:[Webサーバのユーザが所属するグループ名] [プロジェクト名]/storage/
$ chown -R [Webサーバのユーザ名]:[Webサーバのユーザが所属するグループ名] [プロジェクト名]/bootstrap/cache/</code></pre>
<h3 class="title">コントローラ作成</h3>
<p>コントローラの雛形ファイルを作成する。</p>
<pre class="block"><code class="shell">$ cd [プロジェクト名]
$ php artisan make:controller [コントローラ名]</code></pre>

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#command">Laravelのコマンド</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="command" class="title">Laravelのコマンド</h2>
<h3 class="left-line">バージョン確認</h3>
<h4 class="desc">Laravelのバージョンを確認する</h4>
<pre class="block"><code class="shell">$ php artisan --version</code></pre>
<h3 class="left-line">プロジェクト作成</h3>
<h4 class="desc">新しいプロジェクトを作成する</h4>
<pre class="block"><code class="shell">$ cd [プロジェクトを配置するディレクトリ]
$ composer create-project laravel/laravel [プロジェクト名] --prefer-dist
$ chown -R www-data:www-data [プロジェクト名]/bootstrap/cache/
$ chown -R www-data:www-data [プロジェクト名]/storage/</code></pre>
<ul>
  <li><code>www-data</code>は、Apacheの実行ユーザ・グループ。</li>
</ul>
<h4 class="desc">プロジェクトのGitリポジトリをクローンして作成する</h4>
<pre class="block"><code class="shell">$ git clone [GitリポジトリのURL]
$ cd [Gitリポジトリ]
$ compose install
$ chown -R www-data:www-data vendor</code></pre>
<ul>
  <li><code>www-data</code>は、Apacheの実行ユーザ・グループ。</li>
</ul>
<h3 class="left-line">ルート</h3>
<h4 class="desc">ルート一覧を確認する</h4>
<pre class="block"><code class="shell">$ php artisan route:list</code></pre>
<h3 class="left-line">コントローラ作成</h3>
<h4 class="desc">コントローラの雛形ファイルを作成する</h4>
<pre class="block"><code class="shell">$ cd [プロジェクト名]
$ php artisan make:controller [コントローラ名]</code></pre>
@endsection

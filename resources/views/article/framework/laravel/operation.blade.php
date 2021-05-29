@extends('layouts/app')

@php
$mtime = '2021-05-05 00:00:00';
$description = 'Laravelの基本的な操作方法について書いています。';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">Laravelのコマンド</h2>
<h3 class="title">バージョン確認</h3>
<p>Laravelのバージョンを確認する。</p>
<pre class="block"><code class="shell">$ php artisan --version</code></pre>
<h3 class="title">プロジェクト作成</h3>
<p>新しいプロジェクトを作成する。</p>
<ul>
  <li><code>www-data</code>は、Apacheの実行ユーザ・グループ。</li>
</ul>
<pre class="block"><code class="shell">$ cd [プロジェクトを配置するディレクトリ]
$ composer create-project laravel/laravel [プロジェクト名] --prefer-dist
$ chown -R www-data:www-data [プロジェクト名]/bootstrap/cache/
$ chown -R www-data:www-data [プロジェクト名]/storage/</code></pre>
<h3 class="title">コントローラ作成</h3>
<p>コントローラの雛形ファイルを作成する。</p>
<pre class="block"><code class="shell">$ cd [プロジェクト名]
$ php artisan make:controller [コントローラ名]</code></pre>
@endsection

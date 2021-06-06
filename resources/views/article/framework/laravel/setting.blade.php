@extends('layouts/app')

@php
$mtime = '2021-05-15 00:00:00';
$description = 'Laravelの設定方法について書いています。';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">設定方法</h2>
<h3 class="title">プロジェクトの初期設定</h3>
<h4><code>config/app.php</code></h4>
<h5>修正前</h5>
<pre class="block"><code class="apache">&hellip;
    'name' => env('APP_NAME', 'Laravel'),
&hellip;
    'timezone' => 'UTC',
&hellip;
    'locale' => 'en',
&hellip;
</code></pre>
<h5>修正後</h5>
<pre class="block"><code class="apache">&hellip;
    'name' => env('APP_NAME', '[アプリケーション名]'),
&hellip;
    'timezone' => 'Asia/Tokyo',
&hellip;
    'locale' => 'ja',
&hellip;
</code></pre>
<h4><code>.env</code></h4>
<h5>修正前</h5>
<pre class="block"><code class="apache">&hellip;
APP_NAME=Laravel
&hellip;
APP_URL=http://localhost
&hellip;
</code></pre>
<h5>修正後</h5>
<pre class="block"><code class="apache">&hellip;
APP_NAME=[アプリケーション名]
&hellip;
APP_URL=[URL]
&hellip;
</code></pre>
<h3 class="title">URLからpublicを除外する方法</h3>
<p>プロジェクトのURL（<code>https://[ドメイン]/[プロジェクト名]/public</code>）から<code>public</code>を除いたURLでトップページにアクセスできるようにするには、以下の<code>.htaccess</code>ファイルをプロジェクトのトップディレクトリ直下に配置すればよい。</p>
<pre class="block"><code class="apache">&lt;IfModule mod_rewrite.c&gt;
    &lt;IfModule mod_negotiation.c&gt;
        Options -MultiViews
    &lt;/IfModule&gt;

    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} -d [OR]
    RewriteCond %{REQUEST_FILENAME} -f
    RewriteRule ^ ^$1 [N]

    RewriteCond %{REQUEST_URI} (\.\w+$) [NC]
    RewriteRule ^(.*)$ public/$1 

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ server.php
&lt;/IfModule&gt;
</code></pre>
@endsection

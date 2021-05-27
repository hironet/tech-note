@extends('layouts/app')

@php
$mtime = '2021-05-15 00:00:00';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">設定方法</h2>
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

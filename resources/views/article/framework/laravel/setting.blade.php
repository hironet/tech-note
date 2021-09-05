@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#project">プロジェクトの初期設定</a>
      </li>
      <li>
        <a href="#url">URLからpublicを除外する方法</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="project" class="heading bgcolor-heading">プロジェクトの初期設定</h2>
<h3 class="heading bottomline-heading"><code>.env</code>を設定する</h3>
<h4 class="heading leftline-heading">修正前</h4>
<pre class="code-block"><code>&hellip;
APP_NAME=Laravel
&hellip;
APP_ENV=local
&hellip;
APP_URL=http://localhost
&hellip;
</code></pre>
<h4 class="heading leftline-heading">修正後</h4>
<pre class="code-block"><code>&hellip;
APP_NAME=[アプリケーション名]
&hellip;
APP_ENV=production
&hellip;
APP_URL=[URL]
&hellip;
</code></pre>
<h3 class="heading bottomline-heading"><code>config/app.php</code>を設定する</h3>
<h4 class="heading leftline-heading">修正前</h4>
<pre class="code-block"><code class="php">&hellip;
    'timezone' => 'UTC',
&hellip;
    'locale' => 'en',
&hellip;
</code></pre>
<h4 class="heading leftline-heading">修正後</h4>
<pre class="code-block"><code class="php">&hellip;
    'timezone' => 'Asia/Tokyo',
&hellip;
    'locale' => 'ja',
&hellip;
</code></pre>
<h2 id="url" class="heading bgcolor-heading">URLからpublicを除外する方法</h2>
<p>プロジェクトのURL（<code>https://[ドメイン]/[プロジェクト名]/public</code>）から<code>public</code>を除いたURLでトップページにアクセスできるようにするには、以下の<code>.htaccess</code>ファイルをプロジェクトのトップディレクトリ直下に配置すればよい。</p>
<pre class="code-block"><code class="apache">&lt;IfModule mod_rewrite.c&gt;
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

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#install">Docker Composeのインストール</a>
      </li>
      <li>
        <a href="#image">Dockerイメージの管理</a>
      </li>
      <li>
        <a href="#container">Dockerコンテナの管理</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="install" class="title">Docker Composeのインストール</h2>
<p><a href="https://github.com/docker/compose/releases" target="_blank" rel="noreferrer noopener">Composeリポジトリ</a>にアクセスし、ページの指示に従ってインストールする。</p>
<h2 id="image" class="title">Dockerイメージの管理</h2>
<h3 class="desc">イメージを作成する</h3>
<pre class="code-block"><code class="shell">$ docker-compose build</code></pre>
<h3 class="desc">キャッシュを使わないでイメージを作成する</h3>
<pre class="code-block"><code class="shell">$ docker-compose build --no-cache</code></pre>
<h2 id="container" class="title">Dockerコンテナの管理</h2>
<h3 class="desc">コンテナの稼働状態を確認する</h3>
<pre class="code-block"><code class="shell">$ docker-compose ps</code></pre>
<h3 class="desc">コンテナを作成する（起動しない）</h3>
<pre class="code-block"><code class="shell">$ docker-compose up --no-start</code></pre>
<h3 class="desc">コンテナを作成・起動する</h3>
<pre class="code-block"><code class="shell">$ docker-compose up -d</code></pre>
<h3 class="desc">コンテナを停止する</h3>
<pre class="code-block"><code class="shell">$ docker-compose stop</code></pre>
<h3 class="desc">コンテナを再起動する</h3>
<pre class="code-block"><code class="shell">$ docker-compose restart</code></pre>
<h3 class="desc">コンテナを削除する</h3>
<pre class="code-block"><code class="shell">$ docker-compose down</code></pre>
<h3 class="desc">データボリュームも含めてコンテナを削除する</h3>
<pre class="code-block"><code class="shell">$ docker-compose down -v</code></pre>
<h3 class="desc">コンテナのログを確認する</h3>
<pre class="code-block"><code class="shell">$ docker-compose logs</code></pre>
@endsection

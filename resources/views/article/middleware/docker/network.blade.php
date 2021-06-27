@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#basic">基本的な操作</a>
      </li>
      <li>
        <a href="#advanced">高度な操作</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="basic" class="title">基本的な操作</h2>
<h3 class="desc">Dockerネットワークを確認する</h3>
<pre class="block"><code class="shell">$ docker network ls</code></pre>
<h3 class="desc">Dockerネットワークを作成する</h3>
<pre class="block"><code class="shell">$ docker network create -d bridge [ネットワーク名]</code></pre>
<h3 class="desc">Dockerネットワークを削除する</h3>
<pre class="block"><code class="shell">$ docker network rm [ネットワーク名]</code></pre>
<h3 class="desc">Dockerネットワークを指定する</h3>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] --net=[ネットワーク名] [イメージ名]</code></pre>
<h2 id="advanced" class="title">高度な操作</h2>
<h3 class="desc">ホストOS宛てのパケットをDockerコンテナにポートフォワーディングする</h3>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] -p 8000:80 [イメージ名]</code></pre>
<ul>
  <li>ホストOSの8000番ポートをコンテナ内の80番ポートに紐付ける。</li>
</ul>
@endsection

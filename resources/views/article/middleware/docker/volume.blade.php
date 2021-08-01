@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#data-volume">データボリューム</a>
      </li>
      <li>
        <a href="#bind-mount">バインドマウント</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="data-volume" class="heading title-2">データボリューム</h2>
<h3 class="heading desc">データボリュームを確認する</h3>
<pre class="code-block"><code class="shell">$ docker volume ls</code></pre>
<h3 class="heading desc">データボリュームを削除する</h3>
<pre class="code-block"><code class="shell">$ docker volume rm [データボリューム名]</code></pre>
<h3 class="heading desc">未使用のデータボリュームを削除する</h3>
<pre class="code-block"><code class="shell">$ docker volume prune</code></pre>
<h3 class="heading desc">データボリュームをコンテナ内のディレクトリにマウントする</h3>
<pre class="code-block"><code class="shell">$ docker run -itd --name [コンテナ名] -v mydata:/usr/share/nginx/html [イメージ名]</code></pre>
<ul>
  <li>名前が<code>mydata</code>のデータ・ボリュームをコンテナ内の<code>/usr/share/nginx/html</code>にマウントする。</li>
</ul>
<h2 id="bind-mount" class="heading title-2">バインドマウント</h2>
<h3 class="heading desc">ホストOSのディレクトリをコンテナ内のディレクトリにマウントする</h3>
<pre class="code-block"><code class="shell">$ docker run -itd --name [コンテナ名] -v /root/data/nginx:/usr/share/nginx/html [イメージ名]</code></pre>
<ul>
  <li>ホストOSの<code>/root/data/nginx</code>をコンテナ内の<code>/usr/share/nginx/html</code>にマウントする。</li>
</ul>
<h3 class="heading desc">ホストOSのディレクトリをコンテナ内のディレクトリに読み取り専用でマウントする</h3>
<pre class="code-block"><code class="shell">$ docker run -itd --name [コンテナ名] -v /root/data/nginx:/usr/share/nginx/html:ro [イメージ名]</code></pre>
<ul>
  <li>ホストOSの<code>/root/data/nginx</code>をコンテナ内の<code>/usr/share/nginx/html</code>に読み取り専用でマウントする。</li>
</ul>
@endsection

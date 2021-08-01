@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#log">コンテナのログ確認</a>
      </li>
      <li>
        <a href="#file">ファイルコピー</a>
      </li>
      <li>
        <a href="#research">コンテナ関連の調査</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="log" class="heading color-heading">コンテナのログ確認</h2>
<h3 class="heading bottomline-heading">コンテナのログを出力する</h3>
<pre class="code-block"><code class="shell">$ docker logs [コンテナID]</code></pre>
<h3 class="heading bottomline-heading">コンテナのログの末尾100行を出力する</h3>
<pre class="code-block"><code class="shell">$ docker logs --tail=100 [コンテナID]</code></pre>
<h3 class="heading bottomline-heading">コンテナのログを出力し続ける</h3>
<pre class="code-block"><code class="shell">$ docker logs -f [コンテナID]</code></pre>
<h3 class="heading bottomline-heading">指定した時刻以降のコンテナのログを出力する</h3>
<pre class="code-block"><code class="shell">$ docker logs --since 2020-01-01T00:00:00 [コンテナID]</code></pre>
<h2 id="file" class="heading color-heading">ファイルコピー</h2>
<h3 class="heading bottomline-heading">コンテナからホストOSにファイルをコピーする</h3>
<pre class="code-block"><code class="shell">$ docker cp [コンテナID]:[ファイルパス] [ファイルパス]</code></pre>
<h3 class="heading bottomline-heading">ホストOSからコンテナにファイルをコピーする</h3>
<pre class="code-block"><code class="shell">$ docker cp [ファイルパス] [コンテナID]:[ファイルパス]</code></pre>
<h2 id="research" class="heading color-heading">コンテナ関連の調査</h2>
<h3 class="heading bottomline-heading">コンテナの情報を表示する</h3>
<pre class="code-block"><code class="shell">$ docker inspect [コンテナID]</code></pre>
<h3 class="heading bottomline-heading">Dockerデーモンによって使用されているディスク総容量を表示する</h3>
<pre class="code-block"><code class="shell">$ docker system df</code></pre>
<h3 class="heading bottomline-heading">コンテナのリソース使用状況をライブで表示し続ける</h3>
<pre class="code-block"><code class="shell">$ docker stats</code></pre>
<h3 class="heading bottomline-heading">コンテナで実行しているプロセスを確認する</h3>
<pre class="code-block"><code class="shell">$ docker top [コンテナID]</code></pre>
<h3 class="heading bottomline-heading">コンテナで実行しているプロセス毎のCPU・メモリ使用率を確認する</h3>
<pre class="code-block"><code class="shell">$ docker top [コンテナID] aux</code></pre>
<h3 class="heading bottomline-heading">プロセスIDからコンテナIDを特定する</h3>
<pre class="code-block"><code class="shell">$ cat /proc/[プロセスID]/cgroup</code></pre>
@endsection

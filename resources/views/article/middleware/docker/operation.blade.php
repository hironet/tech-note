@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#docker-image">Dockerイメージの管理</a>
      </li>
      <li>
        <a href="#docker-container">Dockerコンテナの管理</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="docker-image" class="title">Dockerイメージの管理</h2>
<h3 class="title">イメージ確認</h3>
<h4 class="oper">ローカルのイメージを確認する</h4>
<pre class="block"><code class="shell">$ docker images</code></pre>
<h4 class="oper">イメージの変更履歴を表示する</h4>
<pre class="block"><code class="shell">$ docker history [イメージ名]</code></pre>
<h3 class="title">イメージ作成</h3>
<h4 class="oper">Dockerfileからイメージを作成する</h4>
<pre class="block"><code class="shell">$ docker build -t [イメージ名]:[タグ] [Dockerfileが存在するディレクトリのパス]</code></pre>
<h4 class="oper">Dockerfileからイメージを作成する（キャッシュを使わない）</h4>
<pre class="block"><code class="shell">$ docker build --no-cache -t [イメージ名]:[タグ] [Dockerfileが存在するディレクトリのパス]</code></pre>
<h4 class="oper">コミットしてイメージを作成する</h4>
<pre class="block"><code class="shell">$ docker commit [コンテナID] [イメージ名]:[タグ]</code></pre>
<h3 class="title">イメージ削除</h3>
<h4 class="oper">イメージを削除する</h4>
<pre class="block"><code class="shell">$ docker rmi [イメージ名]:[タグ]</code></pre>
<h4 class="oper">未使用のイメージを削除する</h4>
<pre class="block"><code class="shell">$ docker rmi -f $(docker images -q)</code></pre>
<h4 class="oper">タグが付いていないイメージを全て削除する</h4>
<pre class="block"><code class="shell">$ docker rmi $(docker images -f "dangling=true" -q)</code></pre>
<h3 class="title">Docker Hub</h3>
<h4 class="oper">イメージをプッシュする</h4>
<pre class="block"><code class="shell">$ docker login
$ docker push [イメージ名]:[タグ]</code></pre>
<h4 class="oper">イメージをプルする</h4>
<pre class="block"><code class="shell">$ docker pull [レジストリ]:[タグ]</code></pre>
<h2 id="docker-container" class="title">Dockerコンテナの管理</h2>
<h3 class="title">コンテナ稼働状態確認</h3>
<h4 class="oper">稼働中のコンテナを確認する</h4>
<pre class="block"><code class="shell">$ docker ps</code></pre>
<h4 class="oper">停止中のコンテナも含め、全てのコンテナを確認する</h4>
<pre class="block"><code class="shell">$ docker ps -a</code></pre>
<h3 class="title">コンテナ作成</h3>
<h4 class="oper">コンテナを作成し、起動する</h4>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] [イメージ名]</code></pre>
<h3 class="title">コンテナ削除</h3>
<h4 class="oper">コンテナを削除する</h4>
<pre class="block"><code class="shell">$ docker rm [コンテナID]</code></pre>
<h4 class="oper">起動しているコンテナを削除する</h4>
<pre class="block"><code class="shell">$ docker rm -f [コンテナID]</code></pre>
<h4 class="oper">停止している全てのコンテナを削除する</h4>
<pre class="block"><code class="shell">$ docker container prune</code></pre>
<h4 class="oper">全てのコンテナを削除する</h4>
<pre class="block"><code class="shell">$ docker rm -f $(docker ps -a -q)</code></pre>
<h4 class="oper">ステータスが「Exited」のコンテナを削除する</h4>
<pre class="block"><code class="shell">$ docker rm $(docker ps -a -f "status=exited" -q)</code></pre>
<h3 class="title">コンテナ起動</h3>
<h4 class="oper">コンテナを起動する</h4>
<pre class="block"><code class="shell">$ docker start [コンテナID]</code></pre>
<h3 class="title">コンテナ停止</h3>
<h4 class="oper">コンテナを停止する</h4>
<pre class="block"><code class="shell">$ docker stop [コンテナID]</code></pre>
<h3 class="title">コンテナ再起動</h3>
<h4 class="oper">コンテナを再起動する</h4>
<pre class="block"><code class="shell">$ docker restart [コンテナID]</code></pre>
<h3 class="title">コンテナへのログイン</h3>
<h4 class="oper">コンテナにログインする</h4>
<pre class="block"><code class="shell">$ docker exec -it [コンテナID] bash</code></pre>
@endsection

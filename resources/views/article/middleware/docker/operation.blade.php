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
      <li>
        <a href="#docker-compose">Docker Compose</a>
      </li>
      <li>
        <a href="#docker-network">ネットワーク管理</a>
      </li>
      <li>
        <a href="#docker-data">データ管理</a>
      </li>
      <li>
        <a href="#docker-other">その他</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="docker-image" class="title">Dockerイメージの管理</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ローカルのイメージを確認する。</td>
        <td><pre class="inline"><code class="shell">$ docker images</code></pre></td>
      </tr>
      <tr>
        <td>レジストリからイメージを取得する。</td>
        <td><pre class="inline"><code class="shell">$ docker pull [レジストリ]:[タグ]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">イメージ作成</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dockerfileからイメージを作成する。</td>
        <td><pre class="inline"><code class="shell">$ docker build -t [イメージ名]:[タグ] [Dockerfileが存在するディレクトリのパス]</code></pre></td>
      </tr>
      <tr>
        <td>Dockerfileからイメージを作成する（キャッシュを使わない）。</td>
        <td><pre class="inline"><code class="shell">$ docker build --no-cache -t [イメージ名]:[タグ] [Dockerfileが存在するディレクトリのパス]</code></pre></td>
      </tr>
      <tr>
        <td>コミットしてイメージを作成する。</td>
        <td><pre class="inline"><code class="shell">$ docker commit [コンテナID] [イメージ名]:[タグ]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">イメージ削除</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>イメージを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rmi [イメージ名]:[タグ]</code></pre></td>
      </tr>
      <tr>
        <td>未使用のイメージを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rmi -f $(docker images -q)</code></pre></td>
      </tr>
      <tr>
        <td>タグが付いていないイメージを全て削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rmi $(docker images -f "dangling=true" -q)</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">Docker Hubへのイメージ登録</h3>
<p>1. Docker Hubにログインする。</p>
<pre class="block"><code class="shell">$ docker login</code></pre>
<p>2. Docker Hubにプッシュする。</p>
<pre class="block"><code class="shell">$ docker push [イメージ名]:[タグ]</code></pre>
<h2 id="docker-container" class="title">Dockerコンテナの管理</h2>
<h3 class="title">コンテナ稼働状態確認</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>稼働中のコンテナを確認する。</td>
        <td><pre class="inline"><code class="shell">$ docker ps</code></pre></td>
      </tr>
      <tr>
        <td>停止中のコンテナも含め、全てのコンテナを確認する。</td>
        <td><pre class="inline"><code class="shell">$ docker ps -a</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナ作成・起動</h3>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] [イメージ名]</code></pre>
<h3 class="title">コンテナ削除</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rm [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>起動しているコンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rm -f [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>停止している全てのコンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker container prune</code></pre></td>
      </tr>
      <tr>
        <td>全てのコンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rm -f $(docker ps -a -q)</code></pre></td>
      </tr>
      <tr>
        <td>ステータスが「Exited」のコンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker rm $(docker ps -a -f "status=exited" -q)</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナへのログイン</h3>
<pre class="block"><code class="shell">$ docker exec -it [コンテナID] bash</code></pre>
<h3 class="title">コンテナ起動・停止・再起動</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナを起動する。</td>
        <td><pre class="inline"><code class="shell">$ docker start [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>コンテナを停止する。</td>
        <td><pre class="inline"><code class="shell">$ docker stop [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>コンテナを再起動する。</td>
        <td><pre class="inline"><code class="shell">$ docker restart [コンテナID]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナのログ確認</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナのログを出力する。</td>
        <td><pre class="inline"><code class="shell">$ docker logs [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>コンテナのログの末尾100行を出力する。</td>
        <td><pre class="inline"><code class="shell">$ docker logs --tail=100 [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>コンテナのログを出力し続ける。</td>
        <td><pre class="inline"><code class="shell">$ docker logs -f [コンテナID]</code></pre></td>
      </tr>
      <tr>
        <td>指定した時刻以降のコンテナのログを出力する。</td>
        <td><pre class="inline"><code class="shell">$ docker logs --since 2020-01-01T00:00:00 [コンテナID]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナの情報表示</h3>
<pre class="block"><code class="shell">$ docker inspect [コンテナID]</code></pre>
<h2 id="docker-compose" class="title">Docker Compose</h2>
<h3 class="title">Docker Composeインストール</h3>
<p><a href="https://github.com/docker/compose/releases" target="_blank" rel="noreferrer noopener">Composeリポジトリ</a>にアクセスし、ページの指示に従ってインストールする。</p>
<h3 class="title">イメージ作成</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>イメージを作成する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose build</code></pre></td>
      </tr>
      <tr>
        <td>キャッシュを使わないでイメージを作成する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose build --no-cache</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナの稼働状態確認</h3>
<pre class="block"><code class="shell">$ docker-compose ps</code></pre>
<h3 class="title">コンテナ作成・起動・停止・再起動</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナを作成する（起動しない）。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose up --no-start</code></pre></td>
      </tr>
      <tr>
        <td>コンテナを作成・起動する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose up -d</code></pre></td>
      </tr>
      <tr>
        <td>コンテナを停止する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose stop</code></pre></td>
      </tr>
      <tr>
        <td>コンテナを再起動する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose restart</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナ削除</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナを削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose down</code></pre></td>
      </tr>
      <tr>
        <td>データボリュームも含めて削除する。</td>
        <td><pre class="inline"><code class="shell">$ docker-compose down -v</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">コンテナのログ確認</h3>
<pre class="block"><code class="shell">$ docker-compose logs</code></pre>
<h2 id="docker-network" class="title">ネットワーク管理</h2>
<h3 class="title">Dockerネットワーク確認</h3>
<pre class="block"><code class="shell">$ docker network ls</code></pre>
<h3 class="title">Dockerネットワーク作成</h3>
<pre class="block"><code class="shell">$ docker network create -d bridge [ネットワーク名]</code></pre>
<h3 class="title">Dockerネットワーク削除</h3>
<pre class="block"><code class="shell">$ docker network rm [ネットワーク名]</code></pre>
<h3 class="title">Dockerネットワーク接続</h3>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] --net=[ネットワーク名] [イメージ名]</code></pre>
<h3 class="title">ポートフォワーディング</h3>
<ul>
  <li>ホストOSの8000番ポートをコンテナ内の80番ポートに紐付ける。</li>
</ul>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] -p 8000:80 [イメージ名]</code></pre>
<h2 id="docker-data" class="title">データ管理</h2>
<h3 class="title">データボリューム確認</h3>
<pre class="block"><code class="shell">$ docker volume ls</code></pre>
<h3 class="title">データボリューム削除</h3>
<pre class="block"><code class="shell">$ docker volume rm [データボリューム名]</code></pre>
<h3 class="title">未使用のデータボリューム削除</h3>
<pre class="block"><code class="shell">$ docker volume prune</code></pre>
<h3 class="title">バインドマウント</h3>
<ul>
  <li> ホストOSの<code>/root/data/nginx</code>をコンテナ内の<code>/usr/share/nginx/html</code>にマウントする。</li>
</ul>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] -v /root/data/nginx:/usr/share/nginx/html [イメージ名]</code></pre>
<ul>
  <li>ホストOSの<code>/root/data/nginx</code>をコンテナ内の<code>/usr/share/nginx/html</code>に読み取り専用でマウントする。</li>
</ul>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] -v /root/data/nginx:/usr/share/nginx/html:ro [イメージ名]</code></pre>
<h3 class="title">名前付きボリューム</h3>
<ul>
  <li>名前が<code>mydata</code>のデータ・ボリュームをコンテナ内の<code>/usr/share/nginx/html</code>にマウントする。</li>
</ul>
<pre class="block"><code class="shell">$ docker run -itd --name [コンテナ名] -v mydata:/usr/share/nginx/html [イメージ名]</code></pre>
<h2 id="docker-other" class="title">その他</h2>
<p>Dockerイメージの変更履歴を表示する。</p>
<pre class="block"><code class="shell">$ docker history [イメージ名]</code></pre>
<p>Dockerデーモンによって使用されているディスク総容量を表示する。</p>
<pre class="block"><code class="shell">$ docker system df</code></pre>
<p>停止しているコンテナ、未使用のイメージ、未使用のデータボリュームを全て削除する。</p>
<pre class="block"><code class="shell">$ docker system prune</code></pre>
<p>コンテナとホストOS間でファイルをコピーする。</p>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コンテナからホストOSにファイルをコピーする。</td>
        <td><pre class="inline"><code class="shell">$ docker cp [コンテナID]:[ファイルパス] [ファイルパス]</code></pre></td>
      </tr>
      <tr>
        <td>ホストOSからコンテナにファイルをコピーする。</td>
        <td><pre class="inline"><code class="shell">$ docker cp [ファイルパス] [コンテナID]:[ファイルパス]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<p>コンテナのリソース使用状況をライブで表示し続ける。</p>
<pre class="block"><code class="shell">$ docker stats</code></pre>
<p>コンテナで実行しているプロセスを確認する。</p>
<pre class="block"><code class="shell">$ docker top [コンテナID]</code></pre>
<p>コンテナで実行しているプロセス毎のCPU・メモリ使用率を確認する。</p>
<pre class="block"><code class="shell">$ docker top [コンテナID] aux</code></pre>
<p>プロセスIDからコンテナIDを特定する。</p>
<pre class="block"><code class="shell">$ cat /proc/[プロセスID]/cgroup</code></pre>
@endsection

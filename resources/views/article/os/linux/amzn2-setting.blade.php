@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#yum">パッケージの管理（Yum）</a>
      </li>
      <li>
        <a href="#rpm">パッケージの管理（RPM）</a>
      </li>
      <li>
        <a href="#service">サービスの操作</a>
      </li>
      <li>
        <a href="#swap">スワップ領域の設定</a>
      </li>
      <li>
        <a href="#hostname">ホスト名の設定</a>
      </li>
      <li>
        <a href="#locale">ロケールの設定</a>
      </li>
      <li>
        <a href="#timezone">タイムゾーンの設定</a>
      </li>
      <li>
        <a href="#other">その他</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="yum" class="title">パッケージの管理（Yum）</h2>
<h3 class="desc">リポジトリ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum repolist</code></pre>
<h3 class="desc">パッケージを検索する</h3>
<pre class="code-block"><code class="shell"># yum search [キーワード]</code></pre>
<h3 class="desc">インストール可能なパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum list</code></pre>
<h3 class="desc">インストールされているパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum list installed</code></pre>
<h3 class="desc">パッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># yum -y install [パッケージ名]</code></pre>
<h3 class="desc">パッケージをアンインストールする</h3>
<pre class="code-block"><code class="shell"># yum remove [パッケージ名]</code></pre>
<h3 class="desc">インストールされている全てのパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># yum update</code></pre>
<h3 class="desc">インストールされている個別のパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># yum update [パッケージ名]</code></pre>
<h3 class="desc">yumでインストールされたファイル一覧を表示する</h3>
<pre class="code-block"><code class="shell"># repoquery --list [パッケージ名]</code></pre>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<h3 class="desc">RPMパッケージをダウンロードする</h3>
<pre class="code-block"><code class="shell"># yumdownloader --resolve [パッケージ名]</code></pre>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<h2 id="rpm" class="title">パッケージの管理（RPM）</h2>
<h3 class="desc">ファイルがどのパッケージに含まれるかを確認する</h3>
<pre class="code-block"><code class="shell"># rpm -qf [ファイルパス]</code></pre>
<h2 id="service" class="title">サービスの操作</h2>
<h3 class="desc">サービス一覧を表示する</h3>
<pre class="code-block"><code class="shell"># systemctl list-unit-files -t service</code></pre>
<h3 class="desc">サービスの状態を確認する</h3>
<pre class="code-block"><code class="shell"># systemctl status [unit名]</code></pre>
<h3 class="desc">サービスを起動する</h3>
<pre class="code-block"><code class="shell"># systemctl start [unit名]</code></pre>
<h3 class="desc">サービスを停止する</h3>
<pre class="code-block"><code class="shell"># systemctl stop [unit名]</code></pre>
<h3 class="desc">サービスを再起動する</h3>
<pre class="code-block"><code class="shell"># systemctl restart [unit名]</code></pre>
<h3 class="desc">サービスの自動起動を有効化する</h3>
<pre class="code-block"><code class="shell"># systemctl enable [unit名]</code></pre>
<h3 class="desc">サービスの自動起動を無効化する</h3>
<pre class="code-block"><code class="shell"># systemctl disable [unit名]</code></pre>
<h2 id="swap" class="title">スワップ領域の設定</h2>
<h3 class="desc">スワップ領域を作成する</h3>
<p>1. 2GB（128MB×16）のスワップファイル（<code>/swapfile</code>）を作成する。</p>
<pre class="code-block"><code class="shell"># dd if=/dev/zero of=/swapfile bs=128M count=16</code></pre>
<p>2. スワップファイルのアクセス権を変更する。</p>
<pre class="code-block"><code class="shell"># chmod 600 /swapfile</code></pre>
<p>3. スワップファイルにスワップ領域を作成する。</p>
<pre class="code-block"><code class="shell"># mkswap /swapfile</code></pre>
<p>4. スワップファイルへのスワッピングを有効にする。</p>
<pre class="code-block"><code class="shell"># swapon /swapfile</code></pre>
<p>5. OS起動時にスワップ領域を有効にする。</p>
<pre class="code-block"><code class="shell"># echo "/swapfile swap swap defaults 0 0" >> /etc/fstab</code></pre>
<h2 id="hostname" class="title">ホスト名の設定</h2>
<p>1. ホスト名の設定を確認する。</p>
<pre class="code-block"><code class="shell"># hostnamectl status</code></pre>
<p>2. ホスト名を<code>hoge.example.com</code>に設定する。</p>
<pre class="code-block"><code class="shell"># hostnamectl set-hostname hoge.example.com</code></pre>
<p>3. ホスト名が<code>hoge.example.com</code>に設定されたことを確認する。</p>
<pre class="code-block"><code class="shell"># hostnamectl status</code></pre>
<h2 id="locale" class="title">ロケールの設定</h2>
<p>1. ロケールの設定を確認する。</p>
<pre class="code-block"><code class="shell"># localectl status</code></pre>
<p>2. ロケールを<code>ja_JP.utf8</code>に設定する。</p>
<pre class="code-block"><code class="shell"># localectl set-locale LANG=ja_JP.utf8</code></pre>
<p>3. ロケールが<code>ja_JP.utf8</code>に設定されたことを確認する。</p>
<pre class="code-block"><code class="shell"># localectl status</code></pre>
<h2 id="timezone" class="title">タイムゾーンの設定</h2>
<p>1. タイムゾーンの設定を確認する。</p>
<pre class="code-block"><code class="shell"># timedatectl status</code></pre>
<p>2. タイムゾーンを<code>Asia/Tokyo (JST)</code>に設定する。</p>
<pre class="code-block"><code class="shell"># timedatectl set-timezone Asia/Tokyo</code></pre>
<p>3. タイムゾーンが<code>Asia/Tokyo (JST)</code>に設定されたことを確認する。</p>
<pre class="code-block"><code class="shell"># timedatectl status</code></pre>
<h2 id="other" class="title">その他</h2>
<h3 class="desc">OS起動時にコマンドを自動実行する</h3>
<pre class="code-block"><code class="shell"># cat /etc/rc.d/rc.local
[実行したいコマンド]
# chmod +x /etc/rc.d/rc.local</code></pre>
<h3 class="desc">OSログイン時にメッセージを表示する</h3>
<pre class="code-block"><code class="shell"># cat /etc/motd
[表示したいメッセージ]</code></pre>
<h3 class="desc">HTTPプロキシを設定する</h3>
<pre class="code-block"><code class="shell"># cat /etc/profile.d/proxy.sh
export http_proxy=[プロキシのホスト名またはIPアドレス]:[ポート番号]
export HTTP_PROXY=$http_proxy
export https_proxy=$http_proxy
export HTTPS_PROXY=$http_proxy
export no_proxy=127.0.0.1,localhost
export NO_PROXY=$no_proxy</code></pre>
<h3 class="desc">cronで実行したコマンドの標準出力および標準エラー出力がメールで飛ばないようにする</h3>
<pre class="code-block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /dev/null 2&gt;&amp;1</code></pre>
<h3 class="desc">フォーマット付きのdateコマンドをcronで実行する</h3>
<pre class="code-block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /tmp/output-$(date '+\%Y\%m\%d').log</code></pre>
<ul>
  <li>フォーマット中の<code>%</code>は、<code>\</code>でエスケープする必要がある点に注意。</li>
</ul>
@endsection

<?php
$ptime = '2021-05-02 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">目次</h2>
<ol>
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
</ol>
<h2 id="yum" class="title">パッケージの管理（Yum）</h2>
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
        <td>リポジトリ一覧を表示する。</td>
        <td><pre class="inline"><code>$ yum repolist</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ情報を検索する。</td>
        <td><pre class="inline"><code>$ yum search [キーワード]</code></pre></td>
      </tr>
      <tr>
        <td>インストール可能なパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code>$ yum list</code></pre></td>
      </tr>
      <tr>
        <td>インストールされているパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code>$ yum list installed</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをインストールする。</td>
        <td><pre class="inline"><code>$ yum -y install [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをアンインストールする。</td>
        <td><pre class="inline"><code>$ yum remove [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている全てのパッケージを更新する。</td>
        <td><pre class="inline"><code>$ yum update</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている個別のパッケージを更新する。</td>
        <td><pre class="inline"><code>$ yum update [パッケージ名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- table-responsive -->
<p>yumでインストールされたファイル一覧を表示する。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="block"><code>$ repoquery --list [パッケージ名]</code></pre>
<p>RPMパッケージをダウンロードする。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="block"><code>$ yumdownloader --resolve [パッケージ名]</code></pre>
<h2 id="rpm" class="title">パッケージの管理（RPM）</h2>
<p>ファイルがどのパッケージに含まれるかを確認する。</p>
<pre class="block"><code>$ rpm -qf [ファイルパス]</code></pre>
<h2 id="service" class="title">サービスの操作</h2>
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
        <td>サービス一覧を表示する。</td>
        <td><pre class="inline"><code>$ systemctl list-unit-files -t service</code></pre></td>
      </tr>
      <tr>
        <td>サービスの状態を確認する。</td>
        <td><pre class="inline"><code>$ systemctl status [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを起動する。</td>
        <td><pre class="inline"><code>$ systemctl start [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを停止する。</td>
        <td><pre class="inline"><code>$ systemctl stop [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを再起動する。</td>
        <td><pre class="inline"><code>$ systemctl restart [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を有効化する。</td>
        <td><pre class="inline"><code>$ systemctl enable [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を無効化する。</td>
        <td><pre class="inline"><code>$ systemctl disable [unit名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- table-responsive -->
<h2 id="swap" class="title">スワップ領域の設定</h2>
<p>1. 2GB（128MB×16）のスワップファイル（<code>/swapfile</code>）を作成する。</p>
<pre class="block"><code>$ dd if=/dev/zero of=/swapfile bs=128M count=16</code></pre>
<p>2. スワップファイルのアクセス権を変更する。</p>
<pre class="block"><code>$ chmod 600 /swapfile</code></pre>
<p>3. スワップファイルにスワップ領域を作成する。</p>
<pre class="block"><code>$ mkswap /swapfile</code></pre>
<p>4. スワップファイルへのスワッピングを有効にする。</p>
<pre class="block"><code>$ swapon /swapfile</code></pre>
<p>5. OS起動時にスワップ領域を有効にする。</p>
<pre class="block"><code>$ echo "/swapfile swap swap defaults 0 0" >> /etc/fstab</code></pre>
<h2 id="hostname" class="title">ホスト名の設定</h2>
<p>1. ホスト名の設定を確認する。</p>
<pre class="block"><code>$ hostnamectl status</code></pre>
<p>2. ホスト名を<code>hoge.hironet.org</code>に設定する。</p>
<pre class="block"><code>$ hostnamectl set-hostname hoge.hironet.org</code></pre>
<p>3. ホスト名が<code>hoge.hironet.org</code>に設定されたことを確認する。</p>
<pre class="block"><code>$ hostnamectl status</code></pre>
<h2 id="locale" class="title">ロケールの設定</h2>
<p>1. ロケールの設定を確認する。</p>
<pre class="block"><code>$ localectl status</code></pre>
<p>2. ロケールを<code>ja_JP.utf8</code>に設定する。</p>
<pre class="block"><code>$ localectl set-locale LANG=ja_JP.utf8</code></pre>
<p>3. ロケールが<code>ja_JP.utf8</code>に設定されたことを確認する。</p>
<pre class="block"><code>$ localectl status</code></pre>
<h2 id="timezone" class="title">タイムゾーンの設定</h2>
<p>1. タイムゾーンの設定を確認する。</p>
<pre class="block"><code>$ timedatectl status</code></pre>
<p>2. タイムゾーンを<code>Asia/Tokyo (JST)</code>に設定する。</p>
<pre class="block"><code>$ timedatectl set-timezone Asia/Tokyo</code></pre>
<p>3. タイムゾーンが<code>Asia/Tokyo (JST)</code>に設定されたことを確認する。</p>
<pre class="block"><code>$ timedatectl status</code></pre>
<h2 id="other" class="title">その他</h2>
<p>OS起動時にコマンドを自動実行する。</p>
<pre class="block"><code>$ cat /etc/rc.d/rc.local
[実行したいコマンド]
$ chmod +x /etc/rc.d/rc.local</code></pre>
<p>OSログイン時にメッセージを表示する。</p>
<pre class="block"><code>$ cat /etc/motd
[表示したいメッセージ]</code></pre>
<p>HTTPプロキシを設定する。</p>
<pre class="block"><code>$ cat /etc/profile.d/proxy.sh
export http_proxy=[プロキシのホスト名またはIPアドレス]:[ポート番号]
export HTTP_PROXY=$http_proxy
export https_proxy=$http_proxy
export HTTPS_PROXY=$http_proxy
export no_proxy=127.0.0.1,localhost
export NO_PROXY=$no_proxy</code></pre>
<p>cronで実行したコマンドの標準出力および標準エラー出力がメールで飛ばないようにする。</p>
<pre class="block"><code>$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /dev/null 2&gt;&amp;1</code></pre>
<p>フォーマット付きのdateコマンドをcronで実行する。</p>
<ul>
  <li>フォーマット中の<code>%</code>は、<code>\</code>でエスケープする必要がある点に注意。</li>
</ul>
<pre class="block"><code>$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /tmp/output-$(date '+\%Y\%m\%d').log</code></pre>

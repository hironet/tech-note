<?php
$ptime = '2021-03-25 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2>目次</h2>
<ol>
  <li>
    <a href="#network">ネットワーク設定</a>
  </li>
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
    <a href="#other">その他</a>
  </li>
</ol>
<h3 id="network" class="title">ネットワーク設定</h3>
<p>ネットワークインタフェースを有効化する。
<pre class="prettyprint block">
$ nmcli c m [ネットワークインタフェース名] connection.autoconnect yes
</pre>
<p>IPアドレスとサブネットマスクを設定する。</p>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] ipv4.addresses [IPアドレス]/[サブネットマスク]
</pre>
<p>デフォルトゲートウェイを設定する。</p>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] ipv4.gateway [デフォルトゲートウェイのIPアドレス]
</pre>
<p>スタティックルートを設定する。</p>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"
</pre>
<p>2つ目以降のスタティックルートを設定する場合は、<code>ipv4.routes</code>の前に<code>+</code>を付ける。</p>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] +ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"
</pre>
<p>DNSサーバを設定する。</p>
<ul>
  <li>DNSサーバのIPアドレスは、カンマ区切りで複数指定できる。</li>
</ul>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] ipv4.dns [DNSサーバのIPアドレス]
</pre>
<p>IPアドレスを固定割り当てに設定する。</p>
<pre class="prettyprint block">
$ nmcli c modify [ネットワークインタフェース名] ipv4.method manual
</pre>
<p>ネットワークインタフェースを再起動する。</p>
<pre class="prettyprint block">
$ nmcli c down [ネットワークインタフェース名]
$ nmcli c up [ネットワークインタフェース名]
</pre>
<h3 id="yum" class="title">パッケージの管理（Yum）</h3>
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
        <td><pre class="prettyprint inline">$ yum repolist</pre></td>
      </tr>
      <tr>
        <td>パッケージ情報を検索する。</td>
        <td><pre class="prettyprint inline">$ yum search [キーワード]</pre></td>
      </tr>
      <tr>
        <td>インストール可能なパッケージ一覧を表示する。</td>
        <td><pre class="prettyprint inline">$ yum list</pre></td>
      </tr>
      <tr>
        <td>インストールされているパッケージ一覧を表示する。</td>
        <td><pre class="prettyprint inline">$ yum list installed</pre></td>
      </tr>
      <tr>
        <td>パッケージをインストールする。</td>
        <td><pre class="prettyprint inline">$ yum -y install [パッケージ名]</pre></td>
      </tr>
      <tr>
        <td>パッケージをアンインストールする。</td>
        <td><pre class="prettyprint inline">$ yum remove [パッケージ名]</pre></td>
      </tr>
      <tr>
        <td>インストールされている全てのパッケージを更新する。</td>
        <td><pre class="prettyprint inline">$ yum update</pre></td>
      </tr>
      <tr>
        <td>インストールされている個別のパッケージを更新する。</td>
        <td><pre class="prettyprint inline">$ yum update [パッケージ名]</pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- table-responsive -->
<p>yumでDVDからパッケージをインストールする。</p>
<pre class="prettyprint block">
$ mkdir /media/CentOS
$ mount -t iso9660 /dev/cdrom /media/CentOS
$ yum -y --disablerepo=* --enablerepo=c7-media install [パッケージ名]
$ umount /media/CentOS
</pre>
<p>yumでインストールされたファイル一覧を表示する。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="prettyprint block">
$ repoquery --list [パッケージ名]
</pre>
<p>RPMパッケージをダウンロードする。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="prettyprint block">
$ yumdownloader --resolve [パッケージ名]
</pre>
<h3 id="rpm" class="title">パッケージの管理（RPM）</h3>
<p>ファイルがどのパッケージに含まれるかを確認する。</p>
<pre class="prettyprint block">
$ rpm -qf [ファイルパス]
</pre>
<h3 id="service" class="title">サービスの操作</h3>
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
        <td><pre class="prettyprint inline">$ systemctl list-unit-files -t service</pre></td>
      </tr>
      <tr>
        <td>サービスの状態を確認する。</td>
        <td><pre class="prettyprint inline">$ systemctl status [unit名]</pre></td>
      </tr>
      <tr>
        <td>サービスを起動する。</td>
        <td><pre class="prettyprint inline">$ systemctl start [unit名]</pre></td>
      </tr>
      <tr>
        <td>サービスを停止する。</td>
        <td><pre class="prettyprint inline">$ systemctl stop [unit名]</pre></td>
      </tr>
      <tr>
        <td>サービスを再起動する。</td>
        <td><pre class="prettyprint inline">$ systemctl restart [unit名]</pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を有効化する。</td>
        <td><pre class="prettyprint inline">$ systemctl enable [unit名]</pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を無効化する。</td>
        <td><pre class="prettyprint inline">$ systemctl disable [unit名]</pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- table-responsive -->
<h3 id="other" class="title">その他</h3>
<p>システムの時刻・日付設定を確認する。</p>
<pre class="prettyprint block">
$ timedatectl status
</pre>
<p>タイムゾーンを<code>Asia/Tokyo (JST)</code>に設定する。</p>
<pre class="prettyprint block">
$ timedatectl set-timezone Asia/Tokyo
</pre>
<p>OS起動時にコマンドを自動実行する。</p>
<pre class="prettyprint block">
$ cat /etc/rc.d/rc.local
[実行したいコマンド]
$ chmod +x /etc/rc.d/rc.local
</pre>
<p>OSログイン時にメッセージを表示する。</p>
<pre class="prettyprint block">
$ cat /etc/motd
[表示したいメッセージ]
</pre>
<p>SSH鍵ペアを作成し、SSH公開鍵を接続先ホストに登録する。</p>
<pre class="prettyprint block">
$ ssh-keygen -t rsa
$ ssh-copy-id -i ~/.ssh/id_rsa.pub [ユーザ名]@[接続先ホスト]
</pre>
<p>SSH接続設定を保存しておき、接続コマンドを簡単にする。</p>
<pre class="prettyprint block">
$ cat ~/.ssh/config
Host [接続名]
HostName [ホスト名]
User [ユーザ名]
IdentityFile [SSH秘密鍵のパス]
$ chmod 600 ~/.ssh/config
$ ssh [接続名]
</pre>
<p>HTTPプロキシを設定する。</p>
<pre class="prettyprint block">
$ cat /etc/profile.d/proxy.sh
export http_proxy=[プロキシのホスト名またはIPアドレス]:[ポート番号]
export HTTP_PROXY=$http_proxy
export https_proxy=$http_proxy
export HTTPS_PROXY=$http_proxy
export no_proxy=127.0.0.1,localhost
export NO_PROXY=$no_proxy
</pre>
<p>cronで実行したコマンドの標準出力および標準エラー出力がメールで飛ばないようにする。</p>
<pre class="prettyprint block">
$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /dev/null 2&gt;&amp;1
</pre>
<p>フォーマット付きのdateコマンドをcronで実行する。</p>
<ul>
  <li>フォーマット中の<code>%</code>は、<code>\</code>でエスケープする必要がある点に注意する。</li>
</ul>
<pre class="prettyprint block">
$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /tmp/output-$(date '+\%Y\%m\%d').log
</pre>

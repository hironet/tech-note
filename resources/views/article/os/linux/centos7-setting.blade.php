@extends('layouts/app')

@section('contents')
@include('components.header')
<nav>
  <ul class="toc">
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
  </ul>
</nav>
<h2 id="network" class="title">ネットワーク設定</h2>
<p>ネットワークインタフェースを有効化する。
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] connection.autoconnect yes</code></pre>
<p>IPアドレスとサブネットマスクを設定する。</p>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.addresses [IPアドレス]/[サブネットマスク]</code></pre>
<p>デフォルトゲートウェイを設定する。</p>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.gateway [デフォルトゲートウェイのIPアドレス]</code></pre>
<p>スタティックルートを設定する。</p>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"</code></pre>
<p>2つ目以降のスタティックルートを設定する場合は、<code>ipv4.routes</code>の前に<code>+</code>を付ける。</p>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] +ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"</code></pre>
<p>DNSサーバを設定する。</p>
<ul>
  <li>DNSサーバのIPアドレスは、カンマ区切りで複数指定できる。</li>
</ul>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.dns [DNSサーバのIPアドレス]</code></pre>
<p>IPアドレスを固定割り当てに設定する。</p>
<pre class="block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.method manual</code></pre>
<p>ネットワークインタフェースを再起動する。</p>
<pre class="block"><code class="shell"># nmcli c down [ネットワークインタフェース名]
# nmcli c up [ネットワークインタフェース名]</code></pre>
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
        <td><pre class="inline"><code class="shell"># yum repolist</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ情報を検索する。</td>
        <td><pre class="inline"><code class="shell"># yum search [キーワード]</code></pre></td>
      </tr>
      <tr>
        <td>インストール可能なパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code class="shell"># yum list</code></pre></td>
      </tr>
      <tr>
        <td>インストールされているパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code class="shell"># yum list installed</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをインストールする。</td>
        <td><pre class="inline"><code class="shell"># yum -y install [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをアンインストールする。</td>
        <td><pre class="inline"><code class="shell"># yum remove [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている全てのパッケージを更新する。</td>
        <td><pre class="inline"><code class="shell"># yum update</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている個別のパッケージを更新する。</td>
        <td><pre class="inline"><code class="shell"># yum update [パッケージ名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<p>yumでDVDからパッケージをインストールする。</p>
<pre class="block"><code class="shell"># mkdir /media/CentOS
# mount -t iso9660 /dev/cdrom /media/CentOS
# yum -y --disablerepo=* --enablerepo=c7-media install [パッケージ名]
# umount /media/CentOS</code></pre>
<p>yumでインストールされたファイル一覧を表示する。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="block"><code class="shell"># repoquery --list [パッケージ名]</code></pre>
<p>RPMパッケージをダウンロードする。</p>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<pre class="block"><code class="shell"># yumdownloader --resolve [パッケージ名]</code></pre>
<h2 id="rpm" class="title">パッケージの管理（RPM）</h2>
<p>ファイルがどのパッケージに含まれるかを確認する。</p>
<pre class="block"><code class="shell"># rpm -qf [ファイルパス]</code></pre>
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
        <td><pre class="inline"><code class="shell"># systemctl list-unit-files -t service</code></pre></td>
      </tr>
      <tr>
        <td>サービスの状態を確認する。</td>
        <td><pre class="inline"><code class="shell"># systemctl status [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを起動する。</td>
        <td><pre class="inline"><code class="shell"># systemctl start [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを停止する。</td>
        <td><pre class="inline"><code class="shell"># systemctl stop [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスを再起動する。</td>
        <td><pre class="inline"><code class="shell"># systemctl restart [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を有効化する。</td>
        <td><pre class="inline"><code class="shell"># systemctl enable [unit名]</code></pre></td>
      </tr>
      <tr>
        <td>サービスの自動起動を無効化する。</td>
        <td><pre class="inline"><code class="shell"># systemctl disable [unit名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="other" class="title">その他</h2>
<p>システムの時刻・日付設定を確認する。</p>
<pre class="block"><code class="shell"># timedatectl status</code></pre>
<p>タイムゾーンを<code>Asia/Tokyo (JST)</code>に設定する。</p>
<pre class="block"><code class="shell"># timedatectl set-timezone Asia/Tokyo</code></pre>
<p>OS起動時にコマンドを自動実行する。</p>
<pre class="block"><code class="shell"># cat /etc/rc.d/rc.local
[実行したいコマンド]
# chmod +x /etc/rc.d/rc.local</code></pre>
<p>OSログイン時にメッセージを表示する。</p>
<pre class="block"><code class="shell"># cat /etc/motd
[表示したいメッセージ]</code></pre>
<p>HTTPプロキシを設定する。</p>
<pre class="block"><code class="shell">$ cat /etc/profile.d/proxy.sh
export http_proxy=[プロキシのホスト名またはIPアドレス]:[ポート番号]
export HTTP_PROXY=$http_proxy
export https_proxy=$http_proxy
export HTTPS_PROXY=$http_proxy
export no_proxy=127.0.0.1,localhost
export NO_PROXY=$no_proxy</code></pre>
<p>SSH鍵ペアを作成し、SSH公開鍵を接続先ホストに登録する。</p>
<pre class="block"><code class="shell">$ ssh-keygen -t rsa
$ ssh-copy-id -i ~/.ssh/id_rsa.pub [ユーザ名]@[接続先ホスト]</code></pre>
<p>SSH接続設定を保存しておき、接続コマンドを簡単にする。</p>
<pre class="block"><code class="shell">$ cat ~/.ssh/config
Host [接続名]
HostName [ホスト名]
User [ユーザ名]
IdentityFile [SSH秘密鍵のパス]
$ chmod 600 ~/.ssh/config
$ ssh [接続名]</code></pre>
<p>cronで実行したコマンドの標準出力および標準エラー出力がメールで飛ばないようにする。</p>
<pre class="block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /dev/null 2&gt;&amp;1</code></pre>
<p>フォーマット付きのdateコマンドをcronで実行する。</p>
<ul>
  <li>フォーマット中の<code>%</code>は、<code>\</code>でエスケープする必要がある点に注意。</li>
</ul>
<pre class="block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /tmp/output-$(date '+\%Y\%m\%d').log</code></pre>
@endsection

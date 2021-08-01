@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
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
</header>
<h2 id="network" class="heading title-2">ネットワーク設定</h2>
<h3 class="heading desc">ネットワークインタフェースを有効化する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] connection.autoconnect yes</code></pre>
<h3 class="heading desc">IPアドレスとサブネットマスクを設定する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.addresses [IPアドレス]/[サブネットマスク]</code></pre>
<h3 class="heading desc">デフォルトゲートウェイを設定する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.gateway [デフォルトゲートウェイのIPアドレス]</code></pre>
<h3 class="heading desc">スタティックルートを設定する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"</code></pre>
<p>2つ目以降のスタティックルートを設定する場合は、<code>ipv4.routes</code>の前に<code>+</code>を付ける。</p>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] +ipv4.routes "[宛先ネットワークのアドレス]/[サブネットマスク] [ゲートウェイのIPアドレス]"</code></pre>
<h3 class="heading desc">DNSサーバを設定する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.dns [DNSサーバのIPアドレス]</code></pre>
<ul>
  <li>DNSサーバのIPアドレスは、カンマ区切りで複数指定できる。</li>
</ul>
<h3 class="heading desc">IPアドレスを固定割り当てに設定する</h3>
<pre class="code-block"><code class="shell"># nmcli c modify [ネットワークインタフェース名] ipv4.method manual</code></pre>
<h3 class="heading desc">ネットワークインタフェースを再起動する</h3>
<pre class="code-block"><code class="shell"># nmcli c down [ネットワークインタフェース名]
# nmcli c up [ネットワークインタフェース名]</code></pre>
<h2 id="yum" class="heading title-2">パッケージの管理（Yum）</h2>
<h3 class="heading desc">リポジトリ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum repolist</code></pre>
<h3 class="heading desc">パッケージを検索する</h3>
<pre class="code-block"><code class="shell"># yum search [キーワード]</code></pre>
<h3 class="heading desc">インストール可能なパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum list</code></pre>
<h3 class="heading desc">インストールされているパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># yum list installed</code></pre>
<h3 class="heading desc">パッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># yum -y install [パッケージ名]</code></pre>
<h3 class="heading desc">パッケージをアンインストールする</h3>
<pre class="code-block"><code class="shell"># yum remove [パッケージ名]</code></pre>
<h3 class="heading desc">インストールされている全てのパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># yum update</code></pre>
<h3 class="heading desc">インストールされている個別のパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># yum update [パッケージ名]</code></pre>
<h3 class="heading desc">yumでDVDからパッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># mkdir /media/CentOS
# mount -t iso9660 /dev/cdrom /media/CentOS
# yum -y --disablerepo=* --enablerepo=c7-media install [パッケージ名]
# umount /media/CentOS</code></pre>
<h3 class="heading desc">yumでインストールされたファイル一覧を表示する</h3>
<pre class="code-block"><code class="shell"># repoquery --list [パッケージ名]</code></pre>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<h3 class="heading desc">RPMパッケージをダウンロードする</h3>
<pre class="code-block"><code class="shell"># yumdownloader --resolve [パッケージ名]</code></pre>
<ul>
  <li>事前に、<code>yum-utils</code>パッケージをインストールしておく必要がある。</li>
</ul>
<h2 id="rpm" class="heading title-2">パッケージの管理（RPM）</h2>
<h3 class="heading desc">ファイルがどのパッケージに含まれるかを確認する</h3>
<pre class="code-block"><code class="shell"># rpm -qf [ファイルパス]</code></pre>
<h2 id="service" class="heading title-2">サービスの操作</h2>
<h3 class="heading desc">サービス一覧を表示する</h3>
<pre class="code-block"><code class="shell"># systemctl list-unit-files -t service</code></pre>
<h3 class="heading desc">サービスの状態を確認する</h3>
<pre class="code-block"><code class="shell"># systemctl status [unit名]</code></pre>
<h3 class="heading desc">サービスを起動する</h3>
<pre class="code-block"><code class="shell"># systemctl start [unit名]</code></pre>
<h3 class="heading desc">サービスを停止する</h3>
<pre class="code-block"><code class="shell"># systemctl stop [unit名]</code></pre>
<h3 class="heading desc">サービスを再起動する</h3>
<pre class="code-block"><code class="shell"># systemctl restart [unit名]</code></pre>
<h3 class="heading desc">サービスの自動起動を有効化する</h3>
<pre class="code-block"><code class="shell"># systemctl enable [unit名]</code></pre>
<h3 class="heading desc">サービスの自動起動を無効化する</h3>
<pre class="code-block"><code class="shell"># systemctl disable [unit名]</code></pre>
<h2 id="other" class="heading title-2">その他</h2>
<h3 class="heading desc">システムの時刻・日付設定を確認する</h3>
<pre class="code-block"><code class="shell"># timedatectl status</code></pre>
<h3 class="heading desc">OS起動時にコマンドを自動実行する</h3>
<pre class="code-block"><code class="shell"># cat /etc/rc.d/rc.local
[実行したいコマンド]
# chmod +x /etc/rc.d/rc.local</code></pre>
<h3 class="heading desc">OSログイン時にメッセージを表示する</h3>
<pre class="code-block"><code class="shell"># cat /etc/motd
[表示したいメッセージ]</code></pre>
<h3 class="heading desc">HTTPプロキシを設定する</h3>
<pre class="code-block"><code class="shell">$ cat /etc/profile.d/proxy.sh
export http_proxy=[プロキシのホスト名またはIPアドレス]:[ポート番号]
export HTTP_PROXY=$http_proxy
export https_proxy=$http_proxy
export HTTPS_PROXY=$http_proxy
export no_proxy=127.0.0.1,localhost
export NO_PROXY=$no_proxy</code></pre>
<h3 class="heading desc">SSH鍵ペアを作成し、SSH公開鍵を接続先ホストに登録する</h3>
<pre class="code-block"><code class="shell">$ ssh-keygen -t rsa
$ ssh-copy-id -i ~/.ssh/id_rsa.pub [ユーザ名]@[接続先ホスト]</code></pre>
<h3 class="heading desc">SSH接続設定を保存しておき、接続コマンドを簡単にする</h3>
<pre class="code-block"><code class="shell">$ cat ~/.ssh/config
Host [接続名]
HostName [ホスト名]
User [ユーザ名]
IdentityFile [SSH秘密鍵のパス]
$ chmod 600 ~/.ssh/config
$ ssh [接続名]</code></pre>
<h3 class="heading desc">cronで実行したコマンドの標準出力および標準エラー出力がメールで飛ばないようにする</h3>
<pre class="code-block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /dev/null 2&gt;&amp;1</code></pre>
<h3 class="heading desc">フォーマット付きのdateコマンドをcronで実行する</h3>
<pre class="code-block"><code class="shell">$ crontab -l
[分] [時] [日] [月] [曜日] [コマンド] &gt; /tmp/output-$(date '+\%Y\%m\%d').log</code></pre>
<ul>
  <li>フォーマット中の<code>%</code>は、<code>\</code>でエスケープする必要がある点に注意。</li>
</ul>
@endsection

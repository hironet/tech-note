@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#arping">arping</a>
      </li>
      <li>
        <a href="#awk">awk</a>
      </li>
      <li>
        <a href="#basename">basename</a>
      </li>
      <li>
        <a href="#chmod">chmod</a>
      </li>
      <li>
        <a href="#chown">chown</a>
      </li>
      <li>
        <a href="#curl">curl</a>
      </li>
      <li>
        <a href="#dd">dd</a>
      </li>
      <li>
        <a href="#dirname">dirname</a>
      </li>
      <li>
        <a href="#dmidecode">dmidecode</a>
      </li>
      <li>
        <a href="#echo">echo</a>
      </li>
      <li>
        <a href="#expr">expr</a>
      </li>
      <li>
        <a href="#find">find</a>
      </li>
      <li>
        <a href="#grep">grep</a>
      </li>
      <li>
        <a href="#ip">ip</a>
      </li>
      <li>
        <a href="#lsblk">lsblk</a>
      </li>
      <li>
        <a href="#lsof">lsof</a>
      </li>
      <li>
        <a href="#mkpasswd">mkpasswd</a>
      </li>
      <li>
        <a href="#mktemp">mktemp</a>
      </li>
      <li>
        <a href="#nc">nc</a>
      </li>
      <li>
        <a href="#nohup">nohup</a>
      </li>
      <li>
        <a href="#readlink">readlink</a>
      </li>
      <li>
        <a href="#sed">sed</a>
      </li>
      <li>
        <a href="#snmpwalk">snmpwalk</a>
      </li>
      <li>
        <a href="#ssh">ssh</a>
      </li>
      <li>
        <a href="#strace">strace</a>
      </li>
      <li>
        <a href="#tail">tail</a>
      </li>
      <li>
        <a href="#tar">tar</a>
      </li>
      <li>
        <a href="#tcpdump">tcpdump</a>
      </li>
      <li>
        <a href="#tcpslice">tcpslice</a>
      </li>
      <li>
        <a href="#tee">tee</a>
      </li>
      <li>
        <a href="#test">test</a>
      </li>
      <li>
        <a href="#view">view</a>
      </li>
      <li>
        <a href="#yes">yes</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="arping" class="heading title-2">arping</h2>
<h3 class="heading desc">同一セグメント上で、pingに応答しないノードの存在を確認する</h3>
<pre class="code-block"><code class="shell">$ arping [IPアドレス]</code></pre>
<h3 class="heading desc">IPアドレスの重複が発生していないかをGratuitous ARPで確認する</h3>
<pre class="code-block"><code class="shell">$ arping -D [IPアドレス]</code></pre>
<h3 class="heading desc">IPアドレスの変更をGratuitous ARPで他のノードに通知し、MACアドレステーブルおよびARPテーブルを更新させる</h3>
<pre class="code-block"><code class="shell">$ arping -A [IPアドレス]</code></pre>
<h2 id="awk" class="heading title-2">awk</h2>
<h3 class="heading desc">ファイルの2列目のみ表示する</h3>
<pre class="code-block"><code class="shell">$ cat [ファイルパス] | awk '{ print $2 }'</code></pre>
<h3 class="heading desc">ファイルの2列目の値が50以上の行のみ表示する</h3>
<pre class="code-block"><code class="shell">$ cat [ファイルパス] | awk '{ if ($2 >= 50) print $0 }'</code></pre>
<h3 class="heading desc">ファイルの各レコードが","で区切られており、5フィールド目の値が"ok"、かつ、6フィールド目の値が"dev"にマッチする行のみ表示する</h3>
<pre class="code-block"><code class="shell">$ cat [ファイルパス] | awk -F ',' '{ if ($5 == "ok" &amp;&amp; $6 ~ /dev/) print $0 }'</code></pre>
<h3 class="heading desc">ログファイルから特定の時間帯の行のみ表示する</h3>
<pre class="code-block"><code class="shell">$ awk -F - '"2018/07/20 03:30:00" &lt; $1 &amp;&amp; $1 &lt;= "2018/07/20 03:35:00"' [ファイルパス]</code></pre>
<h2 id="basename" class="heading title-2">basename</h2>
<h3 class="heading desc">ファイルパスからファイル名部分を取り出す</h3>
<pre class="code-block"><code class="shell">$ basename /var/log/messages
messages</code></pre>
<h2 id="chmod" class="heading title-2">chmod</h2>
<h3 class="heading desc">ディレクトリにSticky Bitを設定する</h3>
<pre class="code-block"><code class="shell">$ chmod +t [ディレクトリパス]</code></pre>
<ul>
  <li>Sticky Bitが設定されたディレクトリでは、全てのユーザがディレクトリおよびファイルを書き込みできるが、所有者のみが削除を行える。</li>
</ul>
<h2 id="chown" class="heading title-2">chown</h2>
<h3 class="heading desc">シンボリックリンクの所有者・所有グループを変更する</h3>
<pre class="code-block"><code class="shell">$ chown -h [所有者]:[所有グループ] [ファイルパス]</code></pre>
<h2 id="curl" class="heading title-2">curl</h2>
<h3 class="heading desc">WebサーバからHTTPヘッダとデータを取得する</h3>
<pre class="code-block"><code class="shell">$ curl -i [URL]</code></pre>
<h3 class="heading desc">WebサーバからHTTPヘッダのみを取得する</h3>
<pre class="code-block"><code class="shell">$ curl -I [URL]</code></pre>
<h3 class="heading desc">SSLサーバ証明書に問題のあるWebサーバからデータを取得する</h3>
<pre class="code-block"><code class="shell">$ curl -k [URL]</code></pre>
<h2 id="dd" class="heading title-2">dd</h2>
<h3 class="heading desc">I/O負荷をかける</h3>
<pre class="code-block"><code class="shell">$ dd if=/dev/zero of=test bs=1M count=512 oflag=direct</code></pre>
<h2 id="dirname" class="heading title-2">dirname</h2>
<h3 class="heading desc">ファイルパスからディレクトリ部分を取り出す</h3>
<pre class="code-block"><code class="shell">$ dirname /var/log/messages
/var/log</code></pre>
<h2 id="dmidecode" class="heading title-2">dmidecode</h2>
<h3 class="heading desc">ハードウェア情報を表示する</h3>
<pre class="code-block"><code class="shell">$ dmidecode</code></pre>
<h2 id="echo" class="heading title-2">echo</h2>
<h3 class="heading desc">空ファイルを作成する</h3>
<pre class="code-block"><code class="shell">$ echo -n > [ファイルパス]</code></pre>
<h3 class="heading desc"><code>\n</code>の位置で改行する</h3>
<pre class="code-block"><code class="shell">$ echo -e 'hello\nworld'
hello
world</code></pre>
<h2 id="expr" class="heading title-2">expr</h2>
<h3 class="heading desc">四則演算をする</h3>
<pre class="code-block"><code class="shell">$ expr 100 + 200
300
$ expr 300 - 200
100
$ expr 11 '*' 11
121
$ expr 400 / 2
200</code></pre>
<h2 id="find" class="heading title-2">find</h2>
<h3 class="heading desc">所有者がrootまたは所有グループがrootのファイルを検索する</h3>
<pre class="code-block"><code class="shell">$ find [ディレクトリパス] \( -user root -o -group root \)</code></pre>
<h3 class="heading desc">所有者が存在しないファイルを検索する</h3>
<pre class="code-block"><code class="shell">$ find / -nouser</code></pre>
<h3 class="heading desc">所有グループが存在しないファイルを検索する</h3>
<pre class="code-block"><code class="shell">$ find / -nogroup</code></pre>
<h3 class="heading desc">更新日時が指定した時刻より新しいファイルを検索する</h3>
<pre class="code-block"><code class="shell">$ find [ディレクトリパス] -newermt 'YYYYMMDD HH:MM'</code></pre>
<h3 class="heading desc">特定のディレクトリ（<code>/home</code>および<code>/proc</code>）配下を検索しないようにする</h3>
<pre class="code-block"><code class="shell">$ find [ディレクトリパス] -not -path '/home/*' -not -path '/proc/*'</code></pre>
<h3 class="heading desc">検索結果のファイル名だけ取り出す</h3>
<pre class="code-block"><code class="shell">$ find [ディレクトリパス] -type f -exec basename {} \;</code></pre>
<h3 class="heading desc">ディレクトリのパーミッションを再帰的に変更する</h3>
<pre class="code-block"><code class="shell">$ find [ディレクトリパス] -type d -exec chmod 755 {} \;</code></pre>
<h2 id="grep" class="heading title-2">grep</h2>
<h3 class="heading desc">パターン文字列にマッチした前後の行も表示する</h3>
<pre class="code-block"><code class="shell">$ grep -C [行数] [パターン文字列] [ファイルパス]</code></pre>
<h3 class="heading desc">設定ファイルのコメントと空行以外を表示する</h3>
<pre class="code-block"><code class="shell">$ grep -v -e '^\s*#' -e '^\s*$' [ファイルパス]</code></pre>
<h3 class="heading desc">パターン文字列のリストをファイルから読み込む</h3>
<pre class="code-block"><code class="shell">$ grep -f [パターン文字列を記載したファイル] [ファイルパス]</code></pre>
<h3 class="heading desc">ハイフンから始まる文字列を検索する</h3>
<pre class="code-block"><code class="shell">$ grep -- [ハイフンから始まるパターン文字列] [ファイルパス]</code></pre>
<h3 class="heading desc">psコマンドのヘッダを表示し、grep自身は除いて表示する</h3>
<pre class="code-block"><code class="shell">$ ps aux | grep -e [U]SER -e [パターン文字列]</code></pre>
<h2 id="ip" class="heading title-2">ip</h2>
<h3 class="heading desc">指定したIPアドレスに到達するための経路を表示する</h3>
<pre class="code-block"><code class="shell">$ ip route get [IPアドレス]</code></pre>
<h3 class="heading desc">ARPテーブルのエントリを表示する</h3>
<pre class="code-block"><code class="shell">$ ip n</code></pre>
<h2 id="lsblk" class="heading title-2">lsblk</h2>
<h3 class="heading desc">ブロックデバイスを一覧表示する</h3>
<pre class="code-block"><code class="shell">$ lsblk</code></pre>
<h2 id="lsof" class="heading title-2">lsof</h2>
<h3 class="heading desc">ファイルを使用しているプロセスを表示する</h3>
<pre class="code-block"><code class="shell">$ lsof [ファイルパス]</code></pre>
<h3 class="heading desc">ポートを使用しているプロセスを表示する</h3>
<pre class="code-block"><code class="shell">$ lsof -i:[ポート番号]</code></pre>
<h3 class="heading desc">プロセスが使用しているファイルを表示する</h3>
<pre class="code-block"><code class="shell">$ lsof -p [プロセスIDまたはプロセス名]</code></pre>
<h3 class="heading desc">ユーザが使用しているファイルを表示する</h3>
<pre class="code-block"><code class="shell">$ lsof -u [ユーザ名]</code></pre>
<h2 id="mkpasswd" class="heading title-2">mkpasswd</h2>
<h3 class="heading desc">10文字のパスワードを生成する</h3>
<pre class="code-block"><code class="shell">$ mkpasswd -l 10</code></pre>
<h2 id="mktemp" class="heading title-2">mktemp</h2>
<h3 class="heading desc">一時ファイルを作成する</h3>
<pre class="code-block"><code class="shell">$ mktemp</code></pre>
<h3 class="heading desc">一時ディレクトリを作成する</h3>
<pre class="code-block"><code class="shell">$ mktemp -d</code></pre>
<h2 id="nc" class="heading title-2">nc</h2>
<h3 class="heading desc">適当なポートをLISTEN状態にする</h3>
<pre class="code-block"><code class="shell">$ nc -lkv -p [ポート番号]</code></pre>
<ul>
  <li><code>-k</code>オプション … 複数コネクションを受け付ける。</li>
  <li><code>-v</code>オプション … 詳細情報を出力する。</li>
</ul>
<h3 class="heading desc">サーバに接続する</h3>
<pre class="code-block"><code class="shell">$ nc -zv [宛先ホスト] [ポート番号]</code></pre>
<ul>
  <li><code>-z</code>オプション … 接続した後、すぐに切断する。</li>
</ul>
<h3 class="heading desc">簡易Webサーバを立ち上げる</h3>
<pre class="code-block"><code class="shell">$ while true; do ( echo -e 'HTTP/1.1 200 OK\n\nhello'; ) | nc -l 8000; done</code></pre>
<pre class="code-block"><code class="shell">$ while true; do ( echo -e 'HTTP/1.1 200 OK\n\n'; cat index.html; ) | nc -l 8000; done</code></pre>
<h2 id="nohup" class="heading title-2">nohup</h2>
<h3 class="heading desc">ログアウト後もコマンドを実行し続ける</h3>
<pre class="code-block"><code class="shell">$ nohup [コマンド] &amp;</code></pre>
<h2 id="readlink" class="heading title-2">readlink</h2>
<h3 class="heading desc">相対パスを絶対パスに変換する</h3>
<pre class="code-block"><code class="shell">$ readlink -f [相対パス]</code></pre>
<h2 id="sed" class="heading title-2">sed</h2>
<h3 class="heading desc">ファイルの5行目を表示する</h3>
<pre class="code-block"><code class="shell">$ sed -n 5p [ファイルパス]</code></pre>
<h3 class="heading desc">ファイルの10～20行目を表示する</h3>
<pre class="code-block"><code class="shell">$ sed -n 10,20p [ファイルパス]</code></pre>
<h3 class="heading desc">ファイルの5行目を削除する</h3>
<pre class="code-block"><code class="shell">$ sed -e '5d' [ファイルパス]</code></pre>
<h3 class="heading desc">ファイルの10～20行目を削除する</h3>
<pre class="code-block"><code class="shell">$ sed -e '10,20d' [ファイルパス]</code></pre>
<h3 class="heading desc">特定の文字列を含む行を削除する</h3>
<pre class="code-block"><code class="shell">$ sed -i -e '/[文字列>/d' [ファイルパス]</code></pre>
<ul>
  <li><code>-i</code>オプション … ファイルを直接編集する。</li>
</ul>
<h3 class="heading desc">特定の文字列全てを別の文字列に置換する</h3>
<pre class="code-block"><code class="shell">$ sed -e 's/[置換前の文字列>/[置換後の文字列>/g' [ファイルパス]</code></pre>
<h2 id="snmpwalk" class="heading title-2">snmpwalk</h2>
<h3 class="heading desc">全MIBを取得する</h3>
<pre class="code-block"><code class="shell">$ snmpwalk -v 2c -c [コミュニティ名] [IPアドレス]</code></pre>
<h2 id="ssh" class="heading title-2">ssh</h2>
<h3 class="heading desc">データベースにないホストへの接続時に警告メッセージを表示しない</h3>
<pre class="code-block"><code class="shell">$ ssh -o StrictHostKeyChecking=no [ユーザ名]@[ホスト名またはIPアドレス]</code></pre>
<h3 class="heading desc">ローカルのシェルスクリプトをリモートホストで実行する</h3>
<pre class="code-block"><code class="shell">$ cat [ファイルパス] | ssh [ユーザ名]@[ホスト名またはIPアドレス] bash</code></pre>
<h2 id="strace" class="heading title-2">strace</h2>
<h3 class="heading desc">プロセスが呼び出すシステムコールをトレースする</h3>
<pre class="code-block"><code class="shell">$ strace [コマンド]</code></pre>
<h3 class="heading desc">既に実行されているプロセスが呼び出すシステムコールをトレースする</h3>
<pre class="code-block"><code class="shell">$ strace -h3 [プロセスID]</code></pre>
<h2 id="tail" class="heading title-2">tail</h2>
<h3 class="heading desc">ファイルの2行目以降を表示する</h3>
<pre class="code-block"><code class="shell">$ tail -n +2 [ファイルパス]</code></pre>
<h2 id="tar" class="heading title-2">tar</h2>
<h3 class="heading desc">tar.gzファイルに格納されているファイル一覧を表示する</h3>
<pre class="code-block"><code class="shell">$ tar ztvf [ファイルパス]</code></pre>
<h2 id="tcpdump" class="heading title-2">tcpdump</h2>
<h3 class="heading desc">Wiresharkを使って解析するためのキャプチャファイルを取得する</h3>
<pre class="code-block"><code class="shell">$ tcpdump -n -i [ネットワークインタフェース名] -s 0 not port 22 -w [保存先のファイルパス]</code></pre>
<h2 id="tcpslice" class="heading title-2">tcpslice</h2>
<h3 class="heading desc">tcpdumpのファイルがいつからいつまでのデータを含んでいるかを確認する</h3>
<pre class="code-block"><code class="shell">$ tcpslice -t [tcpdumpのファイルパス]</code></pre>
<h3 class="heading desc">tcpdumpのファイルから、2018/07/24 02:50:00～3600秒後の範囲を抽出する</h3>
<pre class="code-block"><code class="shell">$ tcpslice -w [保存先のファイルパス] 18y07m24d02h50m00s +3600 [tcpdumpのファイルパス]</code></pre>
<h2 id="tee" class="heading title-2">tee</h2>
<h3 class="heading desc">標準入力から読み込んだ内容を標準出力とファイルに出力する</h3>
<pre class="code-block"><code class="shell">$ [コマンド] 2&gt;&amp;1 | tee [オプション] [ファイルパス]</code></pre>
<ul>
  <li><code>2&gt;&amp;1</code>を付けることで、標準エラー出力も<code>tee</code>に読み込ませることができる。</li>
  <li><code>-a</code>オプション … 指定したファイルに追記する。</li>
</ul>
<h2 id="test" class="heading title-2">test</h2>
<pre class="code-block"><code class="shell">$ test [オプション] [文字列またはファイルパス]</code></pre>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>オプション</th>
        <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>-z</code></td>
        <td>文字列の長さが0であれば真</td>
      </tr>
      <tr>
        <td><code>-n</code></td>
        <td>文字列の長さが0より大きければ真</td>
      </tr>
      <tr>
        <td><code>-d</code></td>
        <td>ディレクトリであれば真</td>
      </tr>
      <tr>
        <td><code>-f</code></td>
        <td>ファイルであれば真</td>
      </tr>
      <tr>
        <td><code>-s</code></td>
        <td>ファイルサイズが0より大きければ真</td>
      </tr>
      <tr>
        <td><code>-e</code></td>
        <td>ファイルが存在すれば真</td>
      </tr>
      <tr>
        <td><code>-r</code></td>
        <td>ファイルが読み取り可能であれば真</td>
      </tr>
      <tr>
        <td><code>-w</code></td>
        <td>ファイルが書き込み可能であれば真</td>
      </tr>
      <tr>
        <td><code>-x</code></td>
        <td>ファイルが実行可能であれば真</td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="view" class="heading title-2">view</h2>
<h3 class="heading desc">viをreadonlyモードで起動する</h3>
<pre class="code-block"><code class="shell">$ view [ファイルパス]</code></pre>
<ul>
  <li><code>vi -R</code>と同じ。</li>
</ul>
<h2 id="yes" class="heading title-2">yes</h2>
<h3 class="heading desc">CPUに高い負荷をかける</h3>
<pre class="code-block"><code class="shell">$ yes > /dev/null</code></pre>
@endsection

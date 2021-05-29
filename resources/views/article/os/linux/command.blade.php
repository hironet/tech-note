@extends('layouts/app')

@php
$mtime = '2021-03-25 00:00:00';
$description = '知っておくと色んな場面で便利になるコマンドの使い方について書いています。';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">目次</h2>
<ul>
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
</ul>
<h3 id="arping" class="title">arping</h3>
<p>同一セグメント上で、pingに応答しないノードの存在を確認する。</p>
<pre class="block"><code class="shell">$ arping [IPアドレス]</code></pre>
<p>IPアドレスの重複が発生していないかをGratuitous ARPで確認する。</p>
<pre class="block"><code class="shell">$ arping -D [IPアドレス]</code></pre>
<p>IPアドレスの変更をGratuitous ARPで他のノードに通知し、MACアドレステーブルおよびARPテーブルを更新させる。</p>
<pre class="block"><code class="shell">$ arping -A [IPアドレス]</code></pre>
<h3 id="awk" class="title">awk</h3>
<p>ファイルの2列目のみ表示する。</p>
<pre class="block"><code class="shell">$ cat [ファイルパス] | awk '{ print $2 }'</code></pre>
<p>ファイルの2列目の値が50以上の行のみ表示する。</p>
<pre class="block"><code class="shell">$ cat [ファイルパス] | awk '{ if ($2 >= 50) print $0 }'</code></pre>
<p>ファイルの各レコードが","で区切られており、5フィールド目の値が"ok"、かつ、6フィールド目の値が"dev"にマッチする行のみ表示する。</p>
<pre class="block"><code class="shell">$ cat [ファイルパス] | awk -F ',' '{ if ($5 == "ok" &amp;&amp; $6 ~ /dev/) print $0 }'</code></pre>
<p>ログファイルから特定の時間帯の行のみ表示する。</p>
<pre class="block"><code class="shell">$ awk -F - '"2018/07/20 03:30:00" &lt; $1 &amp;&amp; $1 &lt;= "2018/07/20 03:35:00"' [ファイルパス]</code></pre>
<h3 id="basename" class="title">basename</h3>
<p>ファイルパスからファイル名部分を取り出す。</p>
<pre class="block"><code class="shell">$ basename /var/log/messages
messages</code></pre>
<h3 id="chmod" class="title">chmod</h3>
<p>ディレクトリにSticky Bitを設定する。</p>
<ul>
  <li>Sticky Bitが設定されたディレクトリでは、全てのユーザがディレクトリおよびファイルを書き込みできるが、所有者のみが削除を行える。</li>
</ul>
<pre class="block"><code class="shell">$ chmod +t [ディレクトリパス]</code></pre>
<h3 id="chown" class="title">chown</h3>
<p>シンボリックリンクの所有者・所有グループを変更する。</p>
<pre class="block"><code class="shell">$ chown -h [所有者]:[所有グループ] [ファイルパス]</code></pre>
<h3 id="curl" class="title">curl</h3>
<p>WebサーバからHTTPヘッダとデータを取得する。</p>
<pre class="block"><code class="shell">$ curl -i [URL]</code></pre>
<p>WebサーバからHTTPヘッダのみを取得する。</p>
<pre class="block"><code class="shell">$ curl -I [URL]</code></pre>
<p>SSLサーバ証明書に問題のあるWebサーバからデータを取得する。</p>
<pre class="block"><code class="shell">$ curl -k [URL]</code></pre>
<h3 id="dd" class="title">dd</h3>
<p>I/O負荷をかける。</p>
<pre class="block"><code class="shell">$ dd if=/dev/zero of=test bs=1M count=512 oflag=direct</code></pre>
<h3 id="dirname" class="title">dirname</h3>
<p>ファイルパスからディレクトリ部分を取り出す。</p>
<pre class="block"><code class="shell">$ dirname /var/log/messages
/var/log</code></pre>
<h3 id="dmidecode" class="title">dmidecode</h3>
<p>ハードウェア情報を表示する。</p>
<pre class="block"><code class="shell">$ dmidecode</code></pre>
<h3 id="echo" class="title">echo</h3>
<p>空ファイルを作成する。</p>
<pre class="block"><code class="shell">$ echo -n > [ファイルパス]</code></pre>
<p><code>\n</code>の位置で改行する。</p>
<pre class="block"><code class="shell">$ echo -e 'hello\nworld'
hello
world</code></pre>
<h3 id="expr" class="title">expr</h3>
<p>四則演算をする。</p>
<pre class="block"><code class="shell">$ expr 100 + 200
300
$ expr 300 - 200
100
$ expr 11 '*' 11
121
$ expr 400 / 2
200</code></pre>
<h3 id="find" class="title">find</h3>
<p>所有者がrootまたは所有グループがrootのファイルを検索する。</p>
<pre class="block"><code class="shell">$ find [ディレクトリパス] \( -user root -o -group root \)</code></pre>
<p>所有者が存在しないファイルを検索する。</p>
<pre class="block"><code class="shell">$ find / -nouser</code></pre>
<p>所有グループが存在しないファイルを検索する。</p>
<pre class="block"><code class="shell">$ find / -nogroup</code></pre>
<p>更新日時が指定した時刻より新しいファイルを検索する。</p>
<pre class="block"><code class="shell">$ find [ディレクトリパス] -newermt 'YYYYMMDD HH:MM'</code></pre>
<p>特定のディレクトリ（<code>/home</code>および<code>/proc</code>）配下を検索しないようにする。</p>
<pre class="block"><code class="shell">$ find [ディレクトリパス] -not -path '/home/*' -not -path '/proc/*'</code></pre>
<p>検索結果のファイル名だけ取り出す。</p>
<pre class="block"><code class="shell">$ find [ディレクトリパス] -type f -exec basename {} \;</code></pre>
<p>ディレクトリのパーミッションを再帰的に変更する。</p>
<pre class="block"><code class="shell">$ find [ディレクトリパス] -type d -exec chmod 755 {} \;</code></pre>
<h3 id="grep" class="title">grep</h3>
<p>パターン文字列にマッチした前後の行も表示する。</p>
<pre class="block"><code class="shell">$ grep -C [行数] [パターン文字列] [ファイルパス]</code></pre>
<p>設定ファイルのコメントと空行以外を表示する。</p>
<pre class="block"><code class="shell">$ grep -v -e '^\s*#' -e '^\s*$' [ファイルパス]</code></pre>
<p>パターン文字列のリストをファイルから読み込む。</p>
<pre class="block"><code class="shell">$ grep -f [パターン文字列を記載したファイル] [ファイルパス]</code></pre>
<p>ハイフンから始まる文字列を検索する。</p>
<pre class="block"><code class="shell">$ grep -- [ハイフンから始まるパターン文字列] [ファイルパス]</code></pre>
<p>psコマンドのヘッダを表示し、grep自身は除いて表示する。</p>
<pre class="block"><code class="shell">$ ps aux | grep -e [U]SER -e [パターン文字列]</code></pre>
<h3 id="ip" class="title">ip</h3>
<p>指定したIPアドレスに到達するための経路を表示する。</p>
<pre class="block"><code class="shell">$ ip route get [IPアドレス]</code></pre>
<p>ARPテーブルのエントリを表示する。</p>
<pre class="block"><code class="shell">$ ip n</code></pre>
<h3 id="lsblk" class="title">lsblk</h3>
<p>ブロックデバイスを一覧表示する。</p>
<pre class="block"><code class="shell">$ lsblk</code></pre>
<h3 id="lsof" class="title">lsof</h3>
<p>ファイルを使用しているプロセスを表示する。</p>
<pre class="block"><code class="shell">$ lsof [ファイルパス]</code></pre>
<p>ポートを使用しているプロセスを表示する。</p>
<pre class="block"><code class="shell">$ lsof -i:[ポート番号]</code></pre>
<p>プロセスが使用しているファイルを表示する。</p>
<pre class="block"><code class="shell">$ lsof -p [プロセスIDまたはプロセス名]</code></pre>
<p>ユーザが使用しているファイルを表示する。</p>
<pre class="block"><code class="shell">$ lsof -u [ユーザ名]</code></pre>
<h3 id="mkpasswd" class="title">mkpasswd</h3>
<p>10文字のパスワードを生成する。</p>
<pre class="block"><code class="shell">$ mkpasswd -l 10</code></pre>
<h3 id="mktemp" class="title">mktemp</h3>
<p>一時ファイルを作成する。</p>
<pre class="block"><code class="shell">$ mktemp</code></pre>
<p>一時ディレクトリを作成する。</p>
<pre class="block"><code class="shell">$ mktemp -d</code></pre>
<h3 id="nc" class="title">nc</h3>
<p>適当なポートをLISTEN状態にする。</p>
<ul>
  <li><code>-k</code>オプション … 複数コネクションを受け付ける。</li>
  <li><code>-v</code>オプション … 詳細情報を出力する。</li>
</ul>
<pre class="block"><code class="shell">$ nc -lkv -p [ポート番号]</code></pre>
<p>サーバに接続する。</p>
<ul>
  <li><code>-z</code>オプション … 接続した後、すぐに切断する。</li>
</ul>
<pre class="block"><code class="shell">$ nc -zv [宛先ホスト] [ポート番号]</code></pre>
<p>簡易Webサーバを立ち上げる。</p>
<pre class="block"><code class="shell">$ while true; do ( echo -e 'HTTP/1.1 200 OK\n\nhello'; ) | nc -l 8000; done</code></pre>
<pre class="block"><code class="shell">$ while true; do ( echo -e 'HTTP/1.1 200 OK\n\n'; cat index.html; ) | nc -l 8000; done</code></pre>
<h3 id="nohup" class="title">nohup</h3>
<p>ログアウト後もコマンドを実行し続ける。</p>
<pre class="block"><code class="shell">$ nohup [コマンド] &amp;</code></pre>
<h3 id="readlink" class="title">readlink</h3>
<p>相対パスを絶対パスに変換する。</p>
<pre class="block"><code class="shell">$ readlink -f [相対パス]</code></pre>
<h3 id="sed" class="title">sed</h3>
<p>ファイルの5行目を表示する。</p>
<pre class="block"><code class="shell">$ sed -n 5p [ファイルパス]</code></pre>
<p>ファイルの10～20行目を表示する。</p>
<pre class="block"><code class="shell">$ sed -n 10,20p [ファイルパス]</code></pre>
<p>ファイルの5行目を削除する。</p>
<pre class="block"><code class="shell">$ sed -e '5d' [ファイルパス]</code></pre>
<p>ファイルの10～20行目を削除する。</p>
<pre class="block"><code class="shell">$ sed -e '10,20d' [ファイルパス]</code></pre>
<p>特定の文字列を含む行を削除する。</p>
<ul>
  <li><code>-i</code>オプション … ファイルを直接編集する。</li>
</ul>
<pre class="block"><code class="shell">$ sed -i -e '/[文字列>/d' [ファイルパス]</code></pre>
<p>特定の文字列全てを別の文字列に置換する。</p>
<pre class="block"><code class="shell">$ sed -e 's/[置換前の文字列>/[置換後の文字列>/g' [ファイルパス]</code></pre>
<h3 id="snmpwalk" class="title">snmpwalk</h3>
<p>全MIBを取得する。</p>
<pre class="block"><code class="shell">$ snmpwalk -v 2c -c [コミュニティ名] [IPアドレス]</code></pre>
<h3 id="ssh" class="title">ssh</h3>
<p>データベースにないホストへの接続時に警告メッセージを表示しない。</p>
<pre class="block"><code class="shell">$ ssh -o StrictHostKeyChecking=no [ユーザ名]@[ホスト名またはIPアドレス]</code></pre>
<p>ローカルのシェルスクリプトをリモートホストで実行する。</p>
<pre class="block"><code class="shell">$ cat [ファイルパス] | ssh [ユーザ名]@[ホスト名またはIPアドレス] bash</code></pre>
<h3 id="strace" class="title">strace</h3>
<p>プロセスが呼び出すシステムコールをトレースする。</p>
<pre class="block"><code class="shell">$ strace [コマンド]</code></pre>
<p>既に実行されているプロセスが呼び出すシステムコールをトレースする。</p>
<pre class="block"><code class="shell">$ strace -p [プロセスID]</code></pre>
<h3 id="tail" class="title">tail</h3>
<p>ファイルの2行目以降を表示する。</p>
<pre class="block"><code class="shell">$ tail -n +2 [ファイルパス]</code></pre>
<h3 id="tar" class="title">tar</h3>
<p><code>tar.gz</code>ファイルに格納されているファイル一覧を表示する。</p>
<pre class="block"><code class="shell">$ tar ztvf [ファイルパス]</code></pre>
<h3 id="tcpdump" class="title">tcpdump</h3>
<p>Wiresharkを使って解析するためのキャプチャファイルを取得する。</p>
<pre class="block"><code class="shell">$ tcpdump -n -i [ネットワークインタフェース名] -s 0 not port 22 -w [保存先のファイルパス]</code></pre>
<h3 id="tcpslice" class="title">tcpslice</h3>
<p>tcpdumpのファイルがいつからいつまでのデータを含んでいるかを確認する。</p>
<pre class="block"><code class="shell">$ tcpslice -t [tcpdumpのファイルパス]</code></pre>
<p>tcpdumpのファイルから、2018/07/24 02:50:00～3600秒後の範囲を抽出する。</p>
<pre class="block"><code class="shell">$ tcpslice -w [保存先のファイルパス] 18y07m24d02h50m00s +3600 [tcpdumpのファイルパス]</code></pre>
<h3 id="tee" class="title">tee</h3>
<p>標準入力から読み込んだ内容を標準出力とファイルに出力する。</p>
<ul>
  <li><code>2&gt;&amp;1</code>を付けることで、標準エラー出力も<code>tee</code>に読み込ませることができる。</li>
  <li><code>-a</code>オプション … 指定したファイルに追記する。</li>
</ul>
<pre class="block"><code class="shell">$ [コマンド] 2&gt;&amp;1 | tee [オプション] [ファイルパス]</code></pre>
<h3 id="test" class="title">test</h3>
<pre class="block"><code class="shell">$ test [オプション] [文字列またはファイルパス]</code></pre>
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
</div><!-- table-responsive -->
<h3 id="view" class="title">view</h3>
<p>viをreadonlyモードで起動する（<code>vi -R</code>と同じ）。</p>
<pre class="block"><code class="shell">$ view [ファイルパス]</code></pre>
@endsection

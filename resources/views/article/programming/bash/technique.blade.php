@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#coding-rules">コーディングルール</a>
      </li>
      <li>
        <a href="#simplified-notation">簡略記法</a>
      </li>
      <li>
        <a href="#string-processing">文字列処理</a>
      </li>
      <li>
        <a href="#array-processing">配列処理</a>
      </li>
      <li>
        <a href="#date-processing">日付処理</a>
      </li>
      <li>
        <a href="#file-processing">ファイル処理</a>
      </li>
      <li>
        <a href="#automation">自動化</a>
      </li>
      <li>
        <a href="#other">その他</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="coding-rules" class="heading title-2">コーディングルール</h2>
<h3 class="heading desc">コーディングルールを決める（以下は一例）</h3>
<ul>
  <li>定数は<code>readonly</code>を付けて定義する。</li>
  <li>グローバル変数は全て大文字、ローカル変数は全て小文字とする。</li>
  <li>ローカル変数は<code>local</code>を付けて定義する。</li>
  <li>変数を参照する場合は<code>${}</code>のように変数名を<code>{ }</code>で囲む。</li>
  <li>関数は<code>function</code>を付けて定義する。</li>
  <li>文字列は<code>' '</code>で囲む。文字列内の変数を展開する場合のみ<code>" "</code>で囲む。</li>
</ul>
<h2 id="simplified-notation" class="heading title-2">簡略記法</h2>
<h3 class="heading desc">条件分岐を1行で書く</h3>
<pre class="code-block"><code class="bash">[ $? == 0 ] &amp;&amp; [真の場合の処理] || [偽の場合の処理]</code></pre>
<ul>
  <li><code>$?</code>の値が0であれば<code>[真の場合の処理]</code>を実行し、0でなければ<code>[偽の場合の処理]</code>を実行する。</li>
</ul>
<h3 class="heading desc">エラー処理をエレガントに行う</h3>
<pre class="code-block"><code class="bash">function error() {
    echo "ERROR: $(basename $0): $@" 1&gt;&amp;2
}

function abort() {
    error $@
    exit 1
}

[ $(whoami) == 'root' ] || abort 'This program must be run as root.'

yum -y update || abort 'yum update faild.'

id vagrant &amp;&amp; abort 'vagrant user already exist.'</code></pre>
<ul>
  <li>エラー処理のために、<code>error</code>関数と<code>abort</code>関数を定義する。</li>
  <li><code>[コマンド] || [エラー処理]</code>は、コマンドが失敗した場合（<code>$? &gt; 0</code>）にエラー処理が行われる。</li>
  <li><code>[コマンド] &amp;&amp; [エラー処理]</code>は、コマンドが成功した場合（<code>$? = 0</code>）にエラー処理が行われる。</li>
</ul>
<h2 id="string-processing" class="heading title-2">文字列処理</h2>
<h3 class="heading desc">コマンドライン引数の数を確認する</h3>
<pre class="code-block"><code class="bash">[ $# -eq 2 ] || abort "Usage: $(basename $0) [file1] [file2]"</code></pre>
<h3 class="heading desc">オプションを解析する</h3>
<pre class="code-block"><code class="bash">while getopts ab: OPT; do
    case ${OPT} in
        a) FLAG_A=1
            ;;
        b) FLAG_B=${OPTARG}
            ;;
        \?) echo "help"
            ;;
    esac
done</code></pre>
<ul>
  <li><code>a)</code>には、コマンド引数として<code>-a</code>が設定された場合の処理を書く。</li>
  <li><code>b)</code>には、コマンド引数として<code>-b [引数]</code>が設定された場合の処理を書く。</li>
  <li><code>\?</code>には、コマンド引数として<code>-a</code>と<code>-b [引数]</code>以外が設定された場合の処理を書く。</li>
</ul>
<h3 class="heading desc">ホスト名からドメイン部分を取り除く</h3>
<pre class="code-block"><code class="shell">$ hostname=www.google.co.jp
$ echo ${hostname}
www.google.co.jp
$ echo ${hostname%%.*}
www</code></pre>
<ul>
  <li><code>${変数名%%パターン}</code>により、後方一致でのマッチ部分を削除できる（最長マッチ）。</li>
</ul>
<h3 class="heading desc">ランダム文字列を生成する</h3>
<pre class="code-block"><code class="bash">cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 20 | head -n 1</code></pre>
<ul>
  <li><code>fold -w [数値]</code>により、生成する文字列の文字数を指定する。</li>
</ul>
<h3 class="heading desc">実行スクリプトのファイル名を除いた絶対パスを取得する</h3>
<pre class="code-block"><code class="bash">script_dir=$(cd $(dirname $0); pwd)</code></pre>
<h3 class="heading desc">関数の呼び出し元に文字列を返す</h3>
<ul>
  <li>関数の標準出力が戻り値になる。</li>
</ul>
<pre class="code-block"><code class="bash">function test_func() {
    echo 'hello, world'
}

var=$(test_func)
echo ${var}</code></pre>
<h2 id="array-processing" class="heading title-2">配列処理</h2>
<h3 class="heading desc">スペース区切りの文字列を要素とする配列を作成する</h3>
<pre class="code-block"><code class="bash">array=($(cat [ファイルパス]))</code></pre>
<ul>
  <li>読み込むファイルには、スペースで区切られた1行の文字列が格納されている想定。</li>
</ul>
<h3 class="heading desc">配列をコピーする</h3>
<pre class="code-block"><code class="bash">array_new=(${array[@]})</code></pre>
<h3 class="heading desc">配列の先頭にデータを追加する</h3>
<pre class="code-block"><code class="bash">array=(1 ${array[@]})
array=('hello' ${array[@]})</code></pre>
<h3 class="heading desc">配列の末尾にデータを追加する</h3>
<pre class="code-block"><code class="bash">array+=(3)
array+=('world')</code></pre>
<h3 class="heading desc">配列の要素数を取得する</h3>
<pre class="code-block"><code class="bash">num=${#array[@]}</code></pre>
<h3 class="heading desc">配列の要素毎に処理する</h3>
<pre class="code-block"><code class="bash">for val in ${array[@]}; do
    echo ${val}  # 何らかの処理
done</code></pre>
<h2 id="date-processing" class="heading title-2">日付処理</h2>
<h3 class="heading desc">更新日時が新しいファイルを3世代だけ残し、それ以前のファイルを削除する</h3>
<pre class="code-block"><code class="bash">ls -t test_*.log | tail -n+4 | xargs rm -f</code></pre>
<ul>
  <li><code>tail -n+4</code>は、4行目から行末までを表示する（行頭から3行目まではカットする）。</li>
</ul>
<h3 class="heading desc">更新日時が3日前以前（72時間前～過去）のファイルを削除する</h3>
<pre class="code-block"><code class="bash">find [ディレクトリパス] -type f -mtime +3 -exec rm -f {} \;</code></pre>
<h3 class="heading desc">更新日時が新しい2つのファイルについて、差分を確認する</h3>
<pre class="code-block"><code class="bash">ls -t test_*.log | head -2 | xargs diff</code></pre>
<h3 class="heading desc">今週が第何週目かを求める</h3>
<pre class="code-block"><code class="bash">expr $(date +%U) - $(date -d "$(date +%m)/1" +%U) + 1</code></pre>
<h2 id="file-processing" class="heading title-2">ファイル処理</h2>
<h3 class="heading desc">ファイルから1行ずつ読み込んで処理する</h3>
<pre class="code-block"><code class="bash">while read line; do
    data=(${line})
    hostname=${data[0]}
    username=${data[1]}
    password=${data[2]}
    # 何らかの処理
done &lt;&lt; FILE_CONTENTS
    $(grep -v -e '^\s*#' -e '^\s*$' [ファイル名])
FILE_CONTENTS</code></pre>
<h3 class="heading desc">ファイルの末尾100行のみ残し、それ以前の行を削除する</h3>
<pre class="code-block"><code class="bash">max_line=100
target_file=[ファイルパス]

num_line=$(wc -l ${target_file} | awk '{ print $1 }')
if [ ${num_line} -gt ${max_line} ]; then
    delete_line=$(expr ${num_line} - ${max_line})
    sed -i -e "1,${delete_line}d" ${target_file}
fi</code></pre>
<h3 class="heading desc">ファイルの内容をソートし、元のファイルに結果を出力する</h3>
<pre class="code-block"><code class="bash">target_file=[ファイルパス]

tmp_file=$(mktemp)
sort ${target_file} &gt; ${tmp_file}
mv ${tmp_file} ${target_file}</code></pre>
<h2 id="automation" class="heading title-2">自動化</h2>
<h3 class="heading desc">パスワード認証のSSHでコマンドを実行する</h3>
<pre class="code-block"><code class="bash">username='[ユーザ名]'
hostname='[ホスト名またはIPアドレス]'
password='[パスワード]'
command1='[コマンド1]'
command2='[コマンド2]'
command3='[コマンド3]'

expect -c "
set timeout -1
spawn ssh ${username}@${hostname}
expect \"${username}@${hostname}'s password:\" {
    send \"${password}\n\"
    expect \"\[#$%&gt;\]\" {
        send \"${command1}\n\"
        send \"${command2}\n\"
        send \"${command3}\n\"
        send \"exit\n\"
    }
} \"Are you sure you want to continue connecting (yes/no)?\" {
    send \"yes\n\"
    expect \"${username}@${hostname}'s password:\" {
        send \"${password}\n\"
        expect \"\[#$%&gt;\]\" {
            send \"${command1}\n\"
            send \"${command2}\n\"
            send \"${command3}\n\"
            send \"exit\n\"
        }
    }
} \"Permission denied\" {
    exit [ステータスコード]
} \"Connection refused\" {
    exit [ステータスコード]
} \"Operation timed out\" {
    exit [ステータスコード]
}
interact
"</code></pre>
<h3 class="heading desc">デーモンとして動作するプログラムを起動・停止する</h3>
<pre class="code-block"><code class="bash">#!/bin/bash

. /etc/rc.d/init.d/functions

readonly PROG='[プログラムへのパス]'
readonly PROGNAME="$(basename ${PROG})"

function start() {
    echo -n "Starting ${PROGNAME}: "
    daemon ${PROG}
    echo
}

function stop() {
    echo -n "Stopping ${PROGNAME}: "
    killproc ${PROGNAME}
    echo
}

function reload() {
    echo -n "Reloading ${PROGNAME}: "
    killproc ${PROGNAME} -HUP
    echo
}

[ -x ${PROG} ] || exit 1

case "$1" in
    start)
        start
        ;;
    stop)
        stop
        ;;
    restart)
        stop
        start
        ;;
    reload)
        reload
        ;;
    status)
        status ${PROGNAME}
        ;;
    *)
        echo "Usage: $(basename $0) [start|stop|restart|reload|status]" &gt;&amp;2
        exit 1
        ;;
esac

exit 0</code></pre>
<h2 id="other" class="heading title-2">その他</h2>
<h3 class="heading desc">スクリプトで実行しているコマンドを表示する</h3>
<pre class="code-block"><code class="bash">#!/bin/bash -x</code></pre>
<ul>
  <li><code>/bin/bash</code>に<code>-x</code>オプションを付ける。</li>
</ul>
<h3 class="heading desc">ループカウンタを使う</h3>
<pre class="code-block"><code class="bash">for i in $(seq 1 10); do
    echo ${i}
done</code></pre>
<pre class="code-block"><code class="bash">count=0
while true; do
    count=$(expr ${count} + 1)
    [ ${count} == 10 ] &amp;&amp; break
done</code></pre>
<h3 class="heading desc">変数の値が空だった場合に値を設定する</h3>
<pre class="code-block"><code class="bash">var=$1
var=${var:='/tmp'}</code></pre>
<ul>
  <li>変数<code>var</code>が空だった場合、<code>'/tmp'</code>を設定する。</li>
</ul>
@endsection

<?php
$ptime = '2021-03-31 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">目次</h2>
<ul>
  <li>
    <a href="#create-repo">リポジトリ作成</a>
  </li>
  <li>
    <a href="#local-repo">ローカルリポジトリに対する操作</a>
  </li>
  <li>
    <a href="#remote-repo">リモートリポジトリに対する操作</a>
  </li>
</ul>
<h2 id="create-repo" class="title">リポジトリ作成</h2>
<p>ローカルにリポジトリを新規作成する。</p>
<pre class="block"><code>$ cd [リポジトリのパス]
$ git init [リポジトリ名]</code></pre>
<p>Webサーバ上にリポジトリを新規作成する。</p>
<pre class="block"><code>$ cd [リポジトリのパス]
$ git init --bare [リポジトリ名]
$ chown -R apache:apache [リポジトリ名]
$ cd [リポジトリ名]
$ git update-server-info</code></pre>
<h2 id="local-repo" class="title">ローカルリポジトリに対する操作</h2>
<p>リポジトリと作業ディレクトリの差分を確認する。</p>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて確認する。</li>
</ul>
<pre class="block"><code>$ git diff [ファイルパス]</code></pre>
<p>作業ディレクトリの変更を元に戻す。</p>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて元に戻す。</li>
</ul>
<pre class="block"><code>$ git checkout [ファイルパス]</code></pre>
<p><code>git add</code>と<code>git commit</code>を同時に行う。</p>
<pre class="block"><code>$ git commit -am "[メッセージ]"</code></pre>
<p>直前のコミットメッセージを変更する。</p>
<ul>
  <li>push実行前に実行する必要がある。</li>
</ul>
<pre class="block"><code>$ git commit --amend -m "[メッセージ]"</code></pre>
<p>過去のコミットメッセージにおけるCOMMITER・AUTHOR・メールアドレスを変更する。</p>
<ul>
  <li><code>[変更前の名前]</code>、<code>[変更後の名前]</code>、<code>[変更後のメールアドレス]</code>の箇所を置換して実行する。</li>
</ul>
<pre class="block"><code>$ git filter-branch --commit-filter '
    if [ "$GIT_COMMITTER_NAME" = "[変更前の名前]" ]; then
        GIT_COMMITTER_NAME="[変更後の名前]";
        GIT_AUTHOR_NAME="[変更後の名前]";
        GIT_COMMITTER_EMAIL="[変更後のメールアドレス]";
        GIT_AUTHOR_EMAIL="[変更後のメールアドレス]";
        git commit-tree "$@";
    else
        git commit-tree "$@";
    fi' HEAD</code></pre>
<h2 id="remote-repo" class="title">リモートリポジトリに対する操作</h2>
<p>originのURLを確認する。</p>
<ul>
  <li>以下のどちらかのコマンドを実行する。</li>
</ul>
<pre class="block"><code>$ git config -l</code></pre>
<pre class="block"><code>$ git remote -v</code></pre>
<p>originのURLを変更する。</p>
<pre class="block"><code>$ git remote set-url origin [URL]</code></pre>
<p>push実行時に<code>origin master</code>を省略する。</p>
<ul>
  <li><code>-u</code>オプションを付けると、次回以降は<code>git push</code>だけで<code>origin master</code>にpushするようになる。</li>
</ul>
<pre class="block"><code>$ git push -u origin master
...
$ git push</code></pre>
<p>push実行時に認証情報（ユーザ名・パスワード）の入力を省略する。</p>
<ul>
  <li><code>git clone</code>実行時にリモートリポジトリの認証情報（ユーザ名・パスワード）をURLに埋め込む。</li>
  <li>ユーザ名に<code>@</code>を含む場合は、それを<code>%40</code>に置き換える。</li>
</ul>
<pre class="block"><code>$ git clone https://[ユーザ名]:[パスワード]@github.com/hironet/tech-note</code></pre>
<ul>
  <li>リモートリポジトリの認証情報（ユーザ名・パスワード）を変更した場合、以下のコマンドを実行し、originのURLを変更する。</li>
</ul>
<pre class="block"><code>$ git remote set-url origin https://[ユーザ名]:[パスワード]@github.com/hironet/dotfiles</code></pre>
<p>オレオレ証明書対策などのため、特定のGitリポジトリにおいて、SSH証明書のチェックを無効にする。</p>
<pre class="block"><code>$ GIT_SSL_NO_VERIFY=true git clone https://github.com/hironet/tech-note
$ cd tech-note
$ git config http.sslVerify false</code></pre>

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
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
  </nav>
</header>
<h2 id="create-repo" class="title">リポジトリ作成</h2>
<h3 class="desc">ローカルにリポジトリを新規作成する</h3>
<pre class="block"><code class="shell">$ cd [リポジトリのパス]
$ git init [リポジトリ名]</code></pre>
<h3 class="desc">Webサーバ上にリポジトリを新規作成する</h3>
<pre class="block"><code class="shell">$ cd [リポジトリのパス]
$ git init --bare [リポジトリ名]
$ chown -R apache:apache [リポジトリ名]
$ cd [リポジトリ名]
$ git update-server-info</code></pre>
<h2 id="local-repo" class="title">ローカルリポジトリに対する操作</h2>
<h3 class="desc">ローカルリポジトリと作業ディレクトリの差分を確認する</h3>
<pre class="block"><code class="shell">$ git diff [ファイルパス]</code></pre>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて確認する。</li>
</ul>
<h3 class="desc">作業ディレクトリの変更を元に戻す</h3>
<pre class="block"><code class="shell">$ git checkout [ファイルパス]</code></pre>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて元に戻す。</li>
</ul>
<h3 class="desc"><code>git add</code>と<code>git commit</code>を同時に行う</h3>
<pre class="block"><code class="shell">$ git commit -am "[メッセージ]"</code></pre>
<h3 class="desc">直前のコミットメッセージを変更する</h3>
<pre class="block"><code class="shell">$ git commit --amend -m "[メッセージ]"</code></pre>
<ul>
  <li><code>git push</code>実行前に実行する必要がある。</li>
</ul>
<h3 class="desc">過去のコミットメッセージにおけるCOMMITER・AUTHOR・メールアドレスを変更する</h3>
<pre class="block"><code class="shell">$ git filter-branch --commit-filter '
    if [ "$GIT_COMMITTER_NAME" = "[変更前の名前]" ]; then
        GIT_COMMITTER_NAME="[変更後の名前]";
        GIT_AUTHOR_NAME="[変更後の名前]";
        GIT_COMMITTER_EMAIL="[変更後のメールアドレス]";
        GIT_AUTHOR_EMAIL="[変更後のメールアドレス]";
        git commit-tree "$@";
    else
        git commit-tree "$@";
    fi' HEAD</code></pre>
<ul>
  <li><code>[変更前の名前]</code>、<code>[変更後の名前]</code>、<code>[変更後のメールアドレス]</code>の箇所を置換して実行する。</li>
</ul>
<h2 id="remote-repo" class="title">リモートリポジトリに対する操作</h2>
<h3 class="desc">originのURLを確認する</h3>
<p>以下のどちらかのコマンドを実行する。</p>
<pre class="block"><code class="shell">$ git config -l</code></pre>
<pre class="block"><code class="shell">$ git remote -v</code></pre>
<h3 class="desc">originのURLを変更する</h3>
<pre class="block"><code class="shell">$ git remote set-url origin [URL]</code></pre>
<h3 class="desc"><code>git push</code>実行時に<code>origin master</code>を省略する</h3>
<pre class="block"><code class="shell">$ git push -u origin master
...
$ git push</code></pre>
<ul>
  <li><code>-u</code>オプションを付けると、次回以降は<code>git push</code>だけで<code>origin master</code>にプッシュするようになる。</li>
</ul>
<h3 class="desc"><code>git push</code>実行時に認証情報（ユーザ名・パスワード）の入力を省略する</h3>
<pre class="block"><code class="shell">$ git clone https://[ユーザ名]:[パスワード]@github.com/hironet/tech-note</code></pre>
<ul>
  <li><code>git clone</code>実行時にリモートリポジトリの認証情報（ユーザ名・パスワード）をURLに埋め込む。</li>
  <li>ユーザ名に<code>@</code>を含む場合は、それを<code>%40</code>に置き換える。</li>
</ul>
<h3 class="desc">保存された認証情報を変更する</h3>
<pre class="block"><code class="shell">$ git remote set-url origin https://[ユーザ名]:[パスワード]@github.com/hironet/dotfiles</code></pre>
<ul>
  <li>リモートリポジトリの認証情報（ユーザ名・パスワード）を変更した場合、上記のコマンドを実行し、originのURLを変更する。</li>
</ul>
<h3 class="desc">オレオレ証明書対策などのため、特定のGitリポジトリにおいて、SSH証明書のチェックを無効にする</h3>
<pre class="block"><code class="shell">$ GIT_SSL_NO_VERIFY=true git clone https://github.com/hironet/tech-note
$ cd tech-note
$ git config http.sslVerify false</code></pre>
@endsection

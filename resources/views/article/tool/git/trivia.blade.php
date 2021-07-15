@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
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
<pre class="code-block"><code class="shell">$ cd [リポジトリのパス]
$ git init [リポジトリ名]</code></pre>
<h3 class="desc">Webサーバ上にリポジトリを新規作成する</h3>
<pre class="code-block"><code class="shell">$ cd [リポジトリのパス]
$ git init --bare [リポジトリ名]
$ chown -R apache:apache [リポジトリ名]
$ cd [リポジトリ名]
$ git update-server-info</code></pre>
<h2 id="local-repo" class="title">ローカルリポジトリに対する操作</h2>
<h3 class="desc">変更履歴を1行で表示する</h3>
<pre class="code-block"><code class="shell">$ git log --oneline</code></pre>
<h3 class="desc">ワークツリーとステージの差分を確認する</h3>
<pre class="code-block"><code class="shell">$ git diff [ファイルパス]</code></pre>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて確認する。</li>
</ul>
<h3 class="desc">ステージへの追加とコミットを同時に行う</h3>
<pre class="code-block"><code class="shell">$ git commit -am "[メッセージ]"</code></pre>
<h3 class="desc">直前のコミットをやり直す</h3>
<pre class="code-block"><code class="shell">$ git commit --amend</code></pre>
<ul>
  <li>必ず<code>git push</code>実行前に実行すること。</li>
</ul>
<h3 class="desc">直前のコミットメッセージを変更する</h3>
<pre class="code-block"><code class="shell">$ git commit --amend -m "[メッセージ]"</code></pre>
<ul>
  <li>必ず<code>git push</code>実行前に実行すること。</li>
</ul>
<h3 class="desc">過去のコミットメッセージにおけるCOMMITER・AUTHOR・メールアドレスを変更する</h3>
<pre class="code-block"><code class="shell">$ git filter-branch --commit-filter '
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
<h3 class="desc">ワークツリーの変更を取り消す</h3>
<pre class="code-block"><code class="shell">$ git checkout -- [ファイルパス]</code></pre>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて元に戻す。</li>
</ul>
<h3 class="desc">ステージの変更を取り消す</h3>
<p>以下のどちらかのコマンドを実行する。</p>
<pre class="code-block"><code class="shell">$ git reset --mixed HEAD [ファイルパス]</code></pre>
<pre class="code-block"><code class="shell">$ git reset HEAD [ファイルパス]</code></pre>
<ul>
  <li><code>--mixed</code>オプションは省略してよい。</li>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて元に戻す。</li>
</ul>
<h3 class="desc">ワークツリーとステージの変更を取り消す</h3>
<pre class="code-block"><code class="shell">$ git reset --hard HEAD [ファイルパス]</code></pre>
<ul>
  <li><code>[ファイルパス]</code>を省略すると、全てのファイルについて元に戻す。</li>
</ul>
<h2 id="remote-repo" class="title">リモートリポジトリに対する操作</h2>
<h3 class="desc">originのURLを確認する</h3>
<p>以下のどちらかのコマンドを実行する。</p>
<pre class="code-block"><code class="shell">$ git config -l</code></pre>
<pre class="code-block"><code class="shell">$ git remote -v</code></pre>
<h3 class="desc">originのURLを変更する</h3>
<pre class="code-block"><code class="shell">$ git remote set-url origin [URL]</code></pre>
<h3 class="desc"><code>git push</code>実行時に<code>origin master</code>を省略する</h3>
<pre class="code-block"><code class="shell">$ git push -u origin master
...
$ git push</code></pre>
<ul>
  <li><code>-u</code>オプションを付けると、次回以降は<code>git push</code>だけで<code>origin master</code>にプッシュするようになる。</li>
</ul>
<h3 class="desc"><code>git push</code>実行時に認証情報（ユーザ名・パスワード）の入力を省略する</h3>
<pre class="code-block"><code class="shell">$ git clone https://[ユーザ名]:[パスワード]@github.com/hironet/tech-note</code></pre>
<ul>
  <li><code>git clone</code>実行時にリモートリポジトリの認証情報（ユーザ名・パスワード）をURLに埋め込む。</li>
  <li>ユーザ名に<code>@</code>を含む場合は、それを<code>%40</code>に置き換える。</li>
</ul>
<h3 class="desc">保存された認証情報を変更する</h3>
<p>リモートリポジトリの認証情報（ユーザ名・パスワード）を変更した場合、以下のコマンドを実行し、originのURLを変更する。</p>
<pre class="code-block"><code class="shell">$ git remote set-url origin https://[ユーザ名]:[パスワード]@github.com/hironet/dotfiles</code></pre>
<h3 class="desc">オレオレ証明書対策などのため、特定のGitリポジトリにおいて、SSH証明書のチェックを無効にする</h3>
<pre class="code-block"><code class="shell">$ GIT_SSL_NO_VERIFY=true git clone https://github.com/hironet/tech-note
$ cd tech-note
$ git config http.sslVerify false</code></pre>
@endsection

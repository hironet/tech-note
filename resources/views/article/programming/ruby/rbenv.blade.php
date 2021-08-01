@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#install">システムワイドなインストール</a>
      </li>
      <li>
        <a href="#command">rbenvのコマンド</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="install" class="heading color-heading">システムワイドなインストール</h2>
<p>1. <a href="https://github.com/rbenv/rbenv" target="_blank" rel="noopener noreferrer">rbenv</a>をインストールする。インストール先は<code>/usr/local/rbenv</code>とする。</p>
<pre class="code-block"><code class="shell">$ git clone https://github.com/rbenv/rbenv /usr/local/rbenv</code></pre>
<p>2. <a href="https://github.com/rbenv/ruby-build" target="_blank" rel="noopener noreferrer">ruby-build</a>をインストールする。インストール先は<code>/usr/local/rbenv/plugins/ruby-build</code>とする。</p>
<pre class="code-block"><code class="shell">$ git clone https://github.com/rbenv/rbenv /usr/local/rbenv/plugins/ruby-build</code></pre>
<p>3. 環境変数を設定する。</p>
<pre class="code-block"><code class="bash">$ cat /etc/profile.d/env.sh
if [ -d /usr/local/rbenv/bin ]; then
    export RBENV_ROOT='/usr/local/rbenv'
    export PATH="${RBENV_ROOT}/bin:${PATH}"
    eval "$(rbenv init -)"
fi</code></pre>
<h2 id="command" class="heading color-heading">rbenvのコマンド</h2>
<h3 class="heading bottomline-heading">インストールしたRubyの全てのバージョンを表示する</h3>
<pre class="code-block"><code class="shell">$ rbenv versions</code></pre>
<h3 class="heading bottomline-heading">現在使用しているRubyのバージョンを表示する</h3>
<pre class="code-block"><code class="shell">$ rbenv version</code></pre>
<h3 class="heading bottomline-heading">インストール可能なRubyのバージョンを表示する</h3>
<pre class="code-block"><code class="shell">$ rbenv install -l</code></pre>
<h3 class="heading bottomline-heading">特定のバージョンのRubyをインストールする</h3>
<pre class="code-block"><code class="shell">$ rbenv install [バージョン番号]
$ rbenv rehash</code></pre>
<h3 class="heading bottomline-heading">特定のバージョンのRubyをアンインストールする</h3>
<pre class="code-block"><code class="shell">$ rbenv uninstall [バージョン番号]
$ rbenv rehash</code></pre>
<h3 class="heading bottomline-heading">使用するRubyのバージョンを設定する</h3>
<pre class="code-block"><code class="shell">$ rbenv global [バージョン番号]</code></pre>
<h3 class="heading bottomline-heading">gemパッケージをインストールする</h3>
<pre class="code-block"><code class="shell">$ gem install [gemパッケージ名]
$ rbenv rehash</code></pre>
@endsection

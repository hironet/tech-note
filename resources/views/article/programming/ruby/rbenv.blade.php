@extends('layouts/app')

@section('contents')
@include('components.header')
<h2 class="title">システムワイドなインストール</h2>
<p>1. <a href="https://github.com/rbenv/rbenv" target="_blank" rel="noopener noreferrer">rbenv</a>をインストールする。インストール先は<code>/usr/local/rbenv</code>とする。</p>
<pre class="block"><code>$ git clone https://github.com/rbenv/rbenv /usr/local/rbenv</code></pre>
<p>2. <a href="https://github.com/rbenv/ruby-build" target="_blank" rel="noopener noreferrer">ruby-build</a>をインストールする。インストール先は<code>/usr/local/rbenv/plugins/ruby-build</code>とする。</p>
<pre class="block"><code>$ git clone https://github.com/rbenv/rbenv /usr/local/rbenv/plugins/ruby-build</code></pre>
<p>3. 環境変数を設定する。</p>
<pre class="block"><code>$ cat /etc/profile.d/env.sh
if [ -d /usr/local/rbenv/bin ]; then
    export RBENV_ROOT='/usr/local/rbenv'
    export PATH="${RBENV_ROOT}/bin:${PATH}"
    eval "$(rbenv init -)"
fi</code></pre>
<h2 class="title">rbenvのコマンド</h2>
<p>インストールしたRubyの全てのバージョンを表示する。</p>
<pre class="block"><code>$ rbenv versions</code></pre>
<p>現在使用しているRubyのバージョンを表示する。</p>
<pre class="block"><code>$ rbenv version</code></pre>
<p>インストール可能なRubyのバージョンを表示する。</p>
<pre class="block"><code>$ rbenv install -l</code></pre>
<p>特定のバージョンのRubyをインストールする。</p>
<pre class="block"><code>$ rbenv install [バージョン番号]
$ rbenv rehash</code></pre>
<p>特定のバージョンのRubyをアンインストールする。</p>
<pre class="block"><code>$ rbenv uninstall [バージョン番号]
$ rbenv rehash</code></pre>
<p>使用するRubyのバージョンを設定する。</p>
<pre class="block"><code>$ rbenv global [バージョン番号]</code></pre>
<p>gemパッケージをインストールする。</p>
<pre class="block"><code>$ gem install [gemパッケージ名]
$ rbenv rehash</code></pre>
@endsection

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#oper">RubyGems操作</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="oper" class="title">RubyGems操作</h2>
<h3 class="desc">インストールされているパッケージ一覧を表示する</h3>
<pre class="block"><code>$ gem list</code></pre>
<h3 class="desc">インストール可能なパッケージ一覧を表示する</h3>
<pre class="block"><code>$ gem list -r</code></pre>
<h3 class="desc">パッケージ情報を検索する</h3>
<pre class="block"><code>$ gem search [キーワード]</code></pre>
<h3 class="desc">パッケージをインストールする</h3>
<pre class="block"><code>$ gem install [パッケージ名]</code></pre>
<h3 class="desc">パッケージをアンインストールする</h3>
<pre class="block"><code>$ gem uninstall [パッケージ名]</code></pre>
<h3 class="desc">パッケージ管理システム（RubyGems）のバージョンを確認する</h3>
<pre class="block"><code>$ gem -v</code></pre>
<h3 class="desc">パッケージ管理システム（RubyGems）を更新する</h3>
<pre class="block"><code>$ gem update --system</code></pre>
<h3 class="desc">インストールされている全てのパッケージを更新する</h3>
<pre class="block"><code>$ gem update</code></pre>
<h3 class="desc">インストールされている個別のパッケージを更新する</h3>
<pre class="block"><code>$ gem update [パッケージ名]</code></pre>
@endsection

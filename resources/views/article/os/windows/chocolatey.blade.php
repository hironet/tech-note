@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#install">Chocolateyのインストール</a>
      </li>
      <li>
        <a href="#verup">Chocolateyのバージョンアップ</a>
      </li>
      <li>
        <a href="#command">Chocolateyのコマンド</a>
      </li>
      <li>
        <a href="#useful">便利な操作</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="install" class="title">Chocolateyのインストール</h2>
<p><a href="https://chocolatey.org/install" target="_blank" rel="noopener noreferrer">Chocolatey</a>の説明に従ってインストールする。</p>
<h2 id="verup" class="title">Chocolateyのバージョンアップ</h2>
<pre class="code-block"><code class="shell">&gt; choco upgrade chocolatey</code></pre>
<h2 id="command" class="title">Chocolateyのコマンド</h2>
<h3 class="desc">インストールされているパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell">&gt; choco list -l</code></pre>
<h3 class="desc">パッケージを検索する</h3>
<pre class="code-block"><code class="shell">&gt; choco list [パッケージ名]</code></pre>
<h3 class="desc">パッケージをインストールする</h3>
<pre class="code-block"><code class="shell">&gt; choco install -y [パッケージ名]</code></pre>
<h3 class="desc">パッケージをアンインストールする</h3>
<pre class="code-block"><code class="shell">&gt; choco uninstall [パッケージ名]</code></pre>
<h3 class="desc">インストールされている全てのパッケージを更新する</h3>
<pre class="code-block"><code class="shell">&gt; choco upgrade -y all</code></pre>
<h3 class="desc">インストールされている個別のパッケージを更新する</h3>
<pre class="code-block"><code class="shell">&gt; choco upgrade -y [パッケージ名]</code></pre>
<h2 id="useful" class="title">便利な操作</h2>
<h3 class="desc">パッケージ名を記載したXMLファイルからパッケージをインストールする</h3>
<pre class="code-block"><code class="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;packages&gt;
  &lt;package id="7zip" /&gt;
  &lt;package id="googlechrome" /&gt;
  &lt;package id="adobereader-update" /&gt;
  &lt;package id="git" /&gt;
  &lt;package id="tortoisegit" /&gt;
  &lt;package id="teraterm" /&gt;
  &lt;package id="winscp" /&gt;
  &lt;package id="wireshark" /&gt;
&lt;/packages></code></pre>
<pre class="code-block"><code class="shell">&gt; choco install -y choco.config</code></pre>
@endsection

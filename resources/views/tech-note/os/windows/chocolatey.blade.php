@extends('layouts/app')

@php
$mtime = '2021-04-02 00:00:00';
$description = 'Windowsのソフトウェア管理ツールであるChocolateyの基本的な操作方法について書いています。';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">目次</h2>
<ul>
  <li>
    <a href="#chocolate-install">Chocolateyのインストール</a>
  </li>
  <li>
    <a href="#chocolate-verup">Chocolateyのバージョンアップ</a>
  </li>
  <li>
    <a href="#chocolate-command">Chocolateyのコマンド</a>
  </li>
  <li>
    <a href="#chocolate-other">その他</a>
  </li>
</ul>
<h2 id="chocolate-install" class="title">Chocolateyのインストール</h2>
<p><a href="https://chocolatey.org/install" target="_blank" rel="noopener noreferrer">Chocolatey</a>の説明に従ってインストールする。</p>
<h2 id="chocolate-verup" class="title">Chocolateyのバージョンアップ</h2>
<pre class="block"><code class="shell">&gt; choco upgrade chocolatey</code></pre>
<h2 id="chocolate-command" class="title">Chocolateyのコマンド</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>インストールされているパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code class="shell">&gt; choco list -l</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ情報を検索する。</td>
        <td><pre class="inline"><code class="shell">&gt; choco list [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをインストールする。</td>
        <td><pre class="inline"><code class="shell">&gt; choco install -y [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをアンインストールする。</td>
        <td><pre class="inline"><code class="shell">&gt; choco uninstall [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている全てのパッケージを更新する。</td>
        <td><pre class="inline"><code class="shell">&gt; choco upgrade -y all</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている個別のパッケージを更新する。</td>
        <td><pre class="inline"><code class="shell">&gt; choco upgrade -y [パッケージ名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div>
<h2 id="chocolate-other" class="title">その他</h2>
<p>パッケージ情報を記載したXMLファイルを読み込ませてインストールする。</p>
<pre class="block"><code class="shell">&gt; choco install -y choco.config</code></pre>
<pre class="block"><code class="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
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
@endsection

@extends('layouts/app')

@php
$mtime = '2021-04-05 00:00:00';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">RubyGems操作</h2>
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
        <td><pre class="inline"><code>$ gem list</code></pre></td>
      </tr>
      <tr>
        <td>インストール可能なパッケージ一覧を表示する。</td>
        <td><pre class="inline"><code>$ gem list -r</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ情報を検索する。</td>
        <td><pre class="inline"><code>$ gem search [キーワード]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをインストールする。</td>
        <td><pre class="inline"><code>$ gem install [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージをアンインストールする。</td>
        <td><pre class="inline"><code>$ gem uninstall [パッケージ名]</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ管理システム（RubyGems）のバージョンを確認する。</td>
        <td><pre class="inline"><code>$ gem -v</code></pre></td>
      </tr>
      <tr>
        <td>パッケージ管理システム（RubyGems）を更新する。</td>
        <td><pre class="inline"><code>$ gem update --system</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている全てのパッケージを更新する。</td>
        <td><pre class="inline"><code>$ gem update</code></pre></td>
      </tr>
      <tr>
        <td>インストールされている個別のパッケージを更新する。</td>
        <td><pre class="inline"><code>$ gem update [パッケージ名]</code></pre></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

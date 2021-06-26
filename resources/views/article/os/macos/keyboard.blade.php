@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#screenshot">スクリーンショット</a>
      </li>
      <li>
        <a href="#other">その他</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="screenshot" class="title">スクリーンショット</h2>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>ショートカットキー</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>画面全体を撮る。</td>
      <td><kbd>&#8679; + &#8984; + 3</kbd></td>
    </tr>
    <tr>
      <td>画面の一部を撮る。</td>
      <td><kbd>&#8679; + &#8984; + 4</kbd></td>
    </tr>
    <tr>
      <td>ウィンドウを撮る。</td>
      <td><kbd>&#8679; + &#8984; + 4 + space</kbd></td>
    </tr>
  </tbody>
</table>
<h2 id="other" class="title">その他</h2>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>ショートカットキー</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>アプリを強制終了する。</td>
      <td><kbd>&#8997; + &#8984; + &#9099;</kbd></td>
    </tr>
  </tbody>
</table>
@endsection

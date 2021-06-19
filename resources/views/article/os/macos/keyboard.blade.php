@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
</header>
<h3 class="title">スクリーンショットを撮る</h3>
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
<h3 class="title">その他</h3>
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

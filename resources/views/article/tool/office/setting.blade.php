@extends('layouts/app')

@section('contents')
@include('components.header')
<h2 class="title">Excelのオプション</h2>
<p>ユーザー名を設定する。</p>
<figure class="figure">
  <img class="figure-img" src="/img/office/excel2019-username.webp" alt="ユーザー名の設定">
</figure>
<p>オートコレクトを無効にする。</p>
<figure class="figure">
  <img class="figure-img" src="/img/office/excel2019-auto-correct.webp" alt="オートコレクトの設定">
</figure>
<p>アドレスをハイパーリンクに変更しない。</p>
<figure class="figure">
  <img class="figure-img" src="/img/office/excel2019-input-auto-format.webp" alt="入力オートフォーマットの設定">
</figure>
<p>オートコンプリートを無効にする。</p>
<figure class="figure">
  <img class="figure-img" src="/img/office/excel2019-auto-complete.webp" alt="オートコンプリートの設定">
</figure>
<p>クイックアクセスツールバーを設定する。</p>
<figure class="figure">
  <img class="figure-img" src="/img/office/excel2019-quick-access.webp" alt="クイックアクセスツールバーの設定">
</figure>
@endsection

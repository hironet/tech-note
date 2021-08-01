@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#option">Excelのオプション</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="option" class="heading title-2">Excelのオプション</h2>
<h3 class="heading desc">ユーザー名を設定する</h3>
<img class="figure-img" src="/img/office/excel2019-username.webp" alt="ユーザー名の設定">
<h3 class="heading desc">オートコレクトを無効にする</h3>
<img class="figure-img" src="/img/office/excel2019-auto-correct.webp" alt="オートコレクトの設定">
<h3 class="heading desc">アドレスをハイパーリンクに変更しない</h3>
<img class="figure-img" src="/img/office/excel2019-input-auto-format.webp" alt="入力オートフォーマットの設定">
<h3 class="heading desc">オートコンプリートを無効にする</h3>
<img class="figure-img" src="/img/office/excel2019-auto-complete.webp" alt="オートコンプリートの設定">
<h3 class="heading desc">クイックアクセスツールバーを設定する</h3>
<img class="figure-img" src="/img/office/excel2019-quick-access.webp" alt="クイックアクセスツールバーの設定">
@endsection

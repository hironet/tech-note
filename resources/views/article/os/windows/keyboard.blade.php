@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#system-info">システム情報</a>
      </li>
      <li>
        <a href="#folder">フォルダ・ファイル操作</a>
      </li>
      <li>
        <a href="#input">文字入力</a>
      </li>
      <li>
        <a href="#screenshot">スクリーンショット</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="system-info" class="title">システム情報</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>ショートカットキー</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>「ファイル名を指定して実行」を起動する</td>
        <td><kbd>Windows + R</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>ファイル名</th>
        <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>devmgmt.msc</code></td>
        <td>「デバイスマネージャ」を起動する。</td>
      </tr>
      <tr>
        <td><code>msconfig</code></td>
        <td>「システム構成」を起動する。</td>
      </tr>
      <tr>
        <td><code>msinfo32</code></td>
        <td>「システム情報」を起動する。</td>
      </tr>
      <tr>
        <td><code>OptionalFeatures.exe</code></td>
        <td>「Windowsの機能の有効化または無効化」を起動する。</td>
      </tr>
      <tr>
        <td><code>regedit</code></td>
        <td>「レジストリエディター」を起動する。</td>
      </tr>
      <tr>
        <td><code>services.msc</code></td>
        <td>「サービス」を起動する。</td>
      </tr>
      <tr>
        <td><code>winver</code></td>
        <td>「Windowsのバージョン情報」を起動する。</td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="folder" class="title">フォルダ・ファイル操作</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>ショートカットキー</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>エクスプローラーを起動する</td>
        <td><kbd>Windows + E</kbd></td>
      </tr>
      <tr>
        <td>新しいフォルダを作成する</td>
        <td><kbd>Ctrl + Shift + N</kbd></td>
      </tr>
      <tr>
        <td>デスクロップを表示する</td>
        <td><kbd>Windows + D</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="input" class="title">文字入力</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>ショートカットキー</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>入力中の文字を全角カタカナに変換する</td>
        <td><kbd>Ctrl + I</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="screenshot" class="title">スクリーンショット</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>ショートカットキー</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>デスクトップ全体のスクリーンショットをクリップボードにコピーする</td>
        <td><kbd>PrintScreen</kbd></td>
      </tr>
      <tr>
        <td>最前面のウィンドウのスクリーンショットをクリップボードにコピーする</td>
        <td><kbd>Alt + PrintScreen</kbd></td>
      </tr>
      <tr>
        <td>デスクトップ全体のスクリーンショットをフォルダに自動保存する</td>
        <td><kbd>Windows + PrintScreen</kbd></td>
      </tr>
      <tr>
        <td>最前面のウィンドウのスクリーンショットをフォルダに自動保存する</td>
        <td><kbd>Windows + Alt + PrintScreen</kbd></td>
      </tr>
      <tr>
        <td>範囲を指定してスクリーンショットをクリップボードにコピーする</td>
        <td><kbd>Windows + Shift + S</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
@endsection

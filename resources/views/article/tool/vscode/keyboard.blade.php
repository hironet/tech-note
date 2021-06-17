@extends('layouts/app')

@section('contents')
@include('components.header')
<ul class="toc">
  <li>
    <a href="#setting">設定</a>
  </li>
  <li>
    <a href="#file">ファイル編集</a>
  </li>
  <li>
    <a href="#tab">タブ操作</a>
  </li>
  <li>
    <a href="#cursor">カーソル操作</a>
  </li>
  <li>
    <a href="#search">検索</a>
  </li>
  <li>
    <a href="#sort">並び替え</a>
  </li>
  <li>
    <a href="#emmet">Emmet</a>
  </li>
  <li>
    <a href="#browser">open in browser</a>
  </li>
</ul>
<h2 id="setting" class="title">設定</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>コマンドパレットを開く。</td>
        <td><kbd>Ctrl + Shift + P</kbd></td>
        <td><kbd>&#8984; + &#8679; + P</kbd></td>
      </tr>
      <tr>
        <td>設定画面を開く。</td>
        <td><kbd>Ctrl + ,</kbd></td>
        <td><kbd>&#8984; + ,</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="file" class="title">ファイル編集</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>新規ファイルを作成する。</td>
        <td><kbd>Ctrl + N</kbd></td>
        <td><kbd>&#8984; + N</kbd></td>
      </tr>
      <tr>
        <td>ファイルを開く。</td>
        <td><kbd>Ctrl + O</kbd></td>
        <td><kbd>&#8984; + O</kbd></td>
      </tr>
      <tr>
        <td>カーソルのある行をコピーする。</td>
        <td><kbd>Ctrl + C</kbd></td>
        <td><kbd>&#8984; + C</kbd></td>
      </tr>
      <tr>
        <td>カーソルのある行をカットする。</td>
        <td><kbd>Ctrl + X</kbd></td>
        <td><kbd>&#8984; + X</kbd></td>
      </tr>
      <tr>
        <td>カーソルのある行を上・下に移動する。</td>
        <td><kbd>Alt + ↑・↓</kbd></td>
        <td><kbd>&#8997; + ↑・↓</kbd></td>
      </tr>
      <tr>
        <td>元に戻す（undo）。</td>
        <td><kbd>Ctrl + Z</kbd></td>
        <td><kbd>&#8984; + Z</kbd>
        </td>
      </tr>
      <tr>
        <td>やり直す（redo）。</td>
        <td><kbd>Ctrl + Y</kbd></td>
        <td><kbd>&#8984; + &#8679; + Z</kbd></td>
      </tr>
      <tr>
        <td>コメントアウトをオン・オフにする。</td>
        <td><kbd>Ctrl + /</kbd></td>
        <td><kbd>&#8984; + /</kbd></td>
      </tr>
      <tr>
        <td>インデントを整える。</td>
        <td><kbd>Shift + Alt + F</kbd></td>
        <td><kbd>&#8679; + &#8997; + F</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="tab" class="title">タブ操作</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>右のタブに移動する。</td>
        <td><kbd>Ctrl + Tab</kbd></td>
        <td><kbd>&#8963; + tab</kbd></td>
      </tr>
      <tr>
        <td>左・右のタブに移動する。</td>
        <td></td>
        <td><kbd>&#8984; + &#8997; + ←・→</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="cursor" class="title">カーソル操作</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>カーソルをファイルの先頭・末尾に移動する。</td>
        <td><kbd>Ctrl + Home・End</kbd></td>
        <td><kbd>&#8984; + ↑・↓</kbd></td>
      </tr>
      <tr>
        <td>カーソルを単語毎に移動する。</td>
        <td><kbd>Ctrl + ←・→</kbd></td>
        <td><kbd>&#8997; + ←・→</kbd></td>
      </tr>
      <tr>
        <td>カーソルを指定した行に移動する。</td>
        <td><kbd>Ctrl + G</kbd></td>
        <td><kbd>&#8963; + G</kbd></td>
      </tr>
      <tr>
        <td>カーソルを上・下に挿入する。</td>
        <td><kbd>Ctrl + Alt + ↑・↓</kbd></td>
        <td><kbd>&#8984; + &#8997; + ↑・↓</kbd></td>
      </tr>
      <tr>
        <td>カーソル位置にある単語と同じ単語を1つずつ範囲範囲に追加する。</td>
        <td><kbd>Ctrl + Shift + L</kbd></td>
        <td><kbd>&#8984; + D</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="search" class="title">検索</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ファイル内を検索する。</td>
        <td><kbd>Ctrl + F</kbd></td>
        <td><kbd>&#8984; + F</kbd></td>
      </tr>
      <tr>
        <td>複数のファイルから検索する。</td>
        <td><kbd>Ctrl + Shift + F</kbd></td>
        <td><kbd>&#8984; + &#8679; + F</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="sort" class="title">並び替え</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>選択範囲を昇順に並び替える。</td>
        <td><kbd>Ctrl + Shift + P</kbd> <code>Sort Lines Ascending</code></td>
        <td><kbd>&#8984; + &#8679; + P</kbd> <code>Sort Lines Ascending</code></td>
      </tr>
      <tr>
        <td>選択範囲を降順に並び替える。</td>
        <td><kbd>Ctrl + Shift + P</kbd> <code>Sort Lines Descending</code></td>
        <td><kbd>&#8984; + &#8679; + P</kbd> <code>Sort Lines Descending</code></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="emmet" class="title">Emmet</h2>
<p>HTML5の雛形を入力する。</p>
<ul>
  <li><code>html:5</code>と入力し、<kbd>tab</kbd>を押す、または、<kbd>! tab</kbd>を押すと、以下が自動的に入力される。</li>
</ul>
<pre class="block"><code>&lt;!DOCTYPE html>
&lt;html lang="ja">
&lt;head>
  &lt;meta charset="UTF-8">
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
  &lt;title>Document&lt;/title>
&lt;/head>
&lt;body>

&lt;/body>
&lt;/html></code></pre>
<p>リストを入力する。</p>
<ul>
  <li><kbd>ul&gt;li*5</kbd>と入力し、<kbd>Enter</kbd>を押すと、以下が自動的に入力される。</li>
</ul>
<pre class="block"><code>&lt;ul>
  &lt;li>&lt;/li>
  &lt;li>&lt;/li>
  &lt;li>&lt;/li>
  &lt;li>&lt;/li>
  &lt;li>&lt;/li>
&lt;/ul></code></pre>
<h2 id="browser" class="title">open in browser</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>Windowsの場合</th>
        <th>macOSの場合</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ファイルをWebブラウザで開く。</td>
        <td><kbd>Alt + B</kbd></td>
        <td><kbd>&#8997; + B</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
@endsection

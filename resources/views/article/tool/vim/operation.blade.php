@extends('layouts/app')

@section('contents')
@include('components.header')
<ul class="toc">
  <li>
    <a href="#command">コマンド</a>
  </li>
  <li>
    <a href="#macro">マクロ</a>
  </li>
  <li>
    <a href="#other">その他</a>
  </li>
</ul>
<h2 id="command" class="title">コマンド</h2>
<h3 class="title">文字列操作</h3>
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
        <td>行をソートする。</td>
        <td><kbd>:sort</kbd></td>
      </tr>
      <tr>
        <td>重複行を削除する。</td>
        <td><kbd>:sort u</kbd></td>
      </tr>
      <tr>
        <td>空行を削除する。</td>
        <td><kbd>:v/./d</kbd></td>
      </tr>
      <tr>
        <td>数値をインクリメントする。</td>
        <td><kbd>Ctrl + a</kbd></td>
      </tr>
      <tr>
        <td>数値をデクリメントする。</td>
        <td><kbd>Ctrl + x</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="title">文字コード・改行コード操作</h3>
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
        <td>現在開いているファイルの文字コードを確認する。</td>
        <td><kbd>:set fileencoding?</kbd></td>
      </tr>
      <tr>
        <td>文字コードを変更する。</td>
        <td><kbd>:set fileencoding=[文字コード]</kbd></td>
      </tr>
      <tr>
        <td>現在開いているファイルの改行コードを確認する。</td>
        <td><kbd>:set fileformat?</kbd></td>
      </tr>
      <tr>
        <td>改行コードを変更する。</td>
        <td><kbd>:set fileformat=[改行コード]</kbd></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<ul>
  <li>文字コードには、以下を指定できる。</li>
</ul>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>文字コード</th>
        <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>cp932</code></td>
        <td><a href="https://ja.wikipedia.org/wiki/Microsoft%E3%82%B3%E3%83%BC%E3%83%89%E3%83%9A%E3%83%BC%E3%82%B8932" target="_blank" rel="noopener noreferrer">Microsoftコードページ932</a></td>
      </tr>
      <tr>
        <td><code>euc-jp</code></td>
        <td></td>
      </tr>
      <tr>
        <td><code>sjis</code></td>
        <td><a href="https://ja.wikipedia.org/wiki/Shift_JIS" target="_blank" rel="noopener noreferrer">Shift_JIS</a></td>
      </tr>
      <tr>
        <td><code>utf-8</code></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<ul>
  <li>改行コードには、以下を指定できる。</li>
</ul>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
          <th>改行コード</th>
          <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>dos</code></td>
        <td></td>
      </tr>
      <tr>
        <td><code>mac</code></td>
        <td></td>
      </tr>
      <tr>
        <td><code>unix</code></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h2 id="macro" class="title">マクロ</h2>
<h3 class="title">マクロの登録</h3>
<p>1. <code>[登録するアルファベット1文字]</code>に対してマクロの登録を開始する。</p>
<pre class="block"><code class="shell">q [登録するアルファベット1文字]</code></pre>
<p>2. 登録したい操作を行う。</p>
<p>3. マクロの登録を終了する。</p>
<pre class="block"><code class="shell">q</code></pre>
<h3 class="title">マクロの実行</h3>
<p>登録したマクロを1回だけ実行する。</p>
<pre class="block"><code class="shell">@[登録したアルファベット1文字]</code></pre>
<p>登録したマクロを5回実行する。</p>
<pre class="block"><code class="shell">5@[登録したアルファベット1文字]</code></pre>
<h2 id="other" class="title">その他</h2>
<p>設定ファイル（.vimrcなど）を再読み込みする。</p>
<pre class="block"><code class="shell">:source [設定ファイル]</code></pre>
<p>特定の文字列が含まれる行を削除する。</p>
<pre class="block"><code class="shell">:g/[特定の文字列]/d</code></pre>
<p>数値を別の文字列に置換する。</p>
<pre class="block"><code class="shell">:%s/\d\+/[置換後の文字列]/g</code></pre>
<p>100文字で改行する。</p>
<pre class="block"><code class="shell">:%s/.\{100}/&amp;\r/g</code></pre>
@endsection

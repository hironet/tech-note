@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#pbcopy">pbcopy</a>
      </li>
      <li>
        <a href="#pbpaste">pbpaste</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="pbcopy" class="title">pbcopy</h2>
<h3 class="desc">ターミナルへの入力内容をクリップボードにコピーする</h3>
<pre class="block"><code class="shell">$ pbcopy</code></pre>
<ul>
  <li>入力終了時は<kbd>control + D</kbd>を押す</li>
</ul>
<h3 class="desc">ファイルの内容をクリップボードにコピーする</h3>
<pre class="block"><code class="shell">$ pbcopy &lt; ~/.ssh/id_rsa.pub</code></pre>
<h3 class="desc">クリップボードを空にする</h3>
<pre class="block"><code class="shell">$ pbcopy &lt; /dev/null</code></pre>
<h2 id="pbpaste" class="title">pbpaste</h2>
<h3 class="desc">クリップボードからペーストする</h3>
<pre class="block"><code class="shell">$ pbpaste</code></pre>
<h3 class="desc">クリップボードから書式情報を削除する</h3>
<pre class="block"><code class="shell">$ pbpaste -Prefer txt | pbcopy</code></pre>
@endsection

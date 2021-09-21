@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#branch">ブランチ</a>
      </li>
      <li>
        <a href="#merge">マージ</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="branch" class="heading bgcolor-heading">ブランチ</h2>
<h3 class="heading bottomline-heading">ブランチの一覧を確認する</h3>
<pre class="code-block"><code class="shell">$ git branch</code></pre>
<h3 class="heading bottomline-heading">ブランチを作成する</h3>
<pre class="code-block"><code class="shell">$ git branch [ブランチ名]</code></pre>
<h3 class="heading bottomline-heading">ブランチを切り替える</h3>
<pre class="code-block"><code class="shell">$ git checkout [ブランチ名]</code></pre>
<h3 class="heading bottomline-heading">ブランチの作成と切り替えを同時に行う</h3>
<pre class="code-block"><code class="shell">$ git checkout -b [ブランチ名]</code></pre>
<h3 class="heading bottomline-heading">ブランチ名を変更する</h3>
<pre class="code-block"><code class="shell">$ git branch -m [ブランチ名]</code></pre>
<h3 class="heading bottomline-heading">ブランチを削除する</h3>
<pre class="code-block"><code class="shell">$ git branch -d [ブランチ名]</code></pre>
<ul>
  <li>masterブランチにマージされていない変更が残っていると削除できない。</li>
</ul>
<h3 class="heading bottomline-heading">ブランチを強制削除する</h3>
<pre class="code-block"><code class="shell">$ git branch -D [ブランチ名]</code></pre>
<ul>
  <li>masterブランチにマージされていない変更が残っていても削除する。</li>
</ul>
<h2 id="merge" class="heading bgcolor-heading">マージ</h2>
<h3 class="heading bottomline-heading">ブランチをマージする</h3>
<pre class="code-block"><code class="shell">$ git checkout [マージ先のブランチ名]
$ git merge [マージ元のブランチ名]</code></pre>
@endsection

@section('script')
@parent
@include('components.highlightjs')
@endsection

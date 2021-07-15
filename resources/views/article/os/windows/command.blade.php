@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#diskpart">diskpart</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="diskpart" class="title">diskpart</h2>
<h3 class="desc">ディスク全体を消去する</h3>
<p>1. diskpartを起動する。</p>
<pre class="code-block"><code class="shell">&gt; diskpart</code></pre>
<p>2. ディスク一覧を表示する。</p>
<pre class="code-block"><code class="shell">DISKPART&gt; list disk</code></pre>
<p>3. 対象ディスクを選択する。</p>
<pre class="code-block"><code class="shell">DISKPART&gt; select disk 1</code></pre>
<p>4. 選択したディスクを確認する。</p>
<pre class="code-block"><code class="shell">DISKPART&gt; list disk</code></pre>
<p>5. ディスクを削除する。</p>
<pre class="code-block"><code class="shell">DISKPART&gt; clean</code></pre>
<p>6. diskpartを終了する。</p>
<pre class="code-block"><code class="shell">DISKPART&gt; exit</code></pre>
@endsection

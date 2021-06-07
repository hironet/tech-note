@extends('layouts/app')

@section('contents')
@include('components.header')
<h3 class="title">ディスク全体を消去する（diskpart）</h3>
<p>1. diskpartを起動する。</p>
<pre class="block"><code class="shell">&gt; diskpart</code></pre>
<p>2. ディスク一覧を表示する。</p>
<pre class="block"><code class="shell">DISKPART&gt; list disk</code></pre>
<p>3. 対象ディスクを選択する。</p>
<pre class="block"><code class="shell">DISKPART&gt; select disk 1</code></pre>
<p>4. 選択したディスクを確認する。</p>
<pre class="block"><code class="shell">DISKPART&gt; list disk</code></pre>
<p>5. ディスクを削除する。</p>
<pre class="block"><code class="shell">DISKPART&gt; clean</code></pre>
<p>6. diskpartを終了する。</p>
<pre class="block"><code class="shell">DISKPART&gt; exit</code></pre>
@endsection

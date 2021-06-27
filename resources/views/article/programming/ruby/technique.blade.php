@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#var">変数</a>
      </li>
      <li>
        <a href="#method">メソッド</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="var" class="title">変数</h2>
<h3 class="desc">変数がnilであることを防ぐ</h3>
<pre class="block"><code class="ruby">array ||= []
# array || (array = []) と同じ。</code></pre>
<ul>
  <li>変数<code>array</code>が存在すれば何もせず、存在しなければ<code>array</code>に空の配列を代入する。</li>
</ul>
<h2 id="method" class="title">メソッド</h2>
<h3 class="desc">メソッド呼び出し時のNoMethodErrorを防ぐ</h3>
<pre class="block"><code class="ruby">str = nil
len = str&amp;.length
=> nil
# len = str ? str.length : nil と同じ。</code></pre>
<ul>
  <li>Safe Navigation Operator（<code>&amp;.</code>）を使用してメソッドを呼び出すと、レシーバが<code>nil</code>の場合でも<code>NoMethodError</code>が発生せず、<code>nil</code>を返す。</li>
</ul>
@endsection

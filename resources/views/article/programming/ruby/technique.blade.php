@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#var">変数</a>
      </li>
      <li>
        <a href="#method">メソッド</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="var" class="heading bgcolor-heading">変数</h2>
<h3 class="heading bottomline-heading">変数がnilであることを防ぐ</h3>
<pre class="code-block"><code class="ruby">array ||= []
# array || (array = []) と同じ。</code></pre>
<ul>
  <li>変数<code>array</code>が存在すれば何もせず、存在しなければ<code>array</code>に空の配列を代入する。</li>
</ul>
<h2 id="method" class="heading bgcolor-heading">メソッド</h2>
<h3 class="heading bottomline-heading">メソッド呼び出し時のNoMethodErrorを防ぐ</h3>
<pre class="code-block"><code class="ruby">str = nil
len = str&amp;.length
=> nil
# len = str ? str.length : nil と同じ。</code></pre>
<ul>
  <li>Safe Navigation Operator（<code>&amp;.</code>）を使用してメソッドを呼び出すと、レシーバが<code>nil</code>の場合でも<code>NoMethodError</code>が発生せず、<code>nil</code>を返す。</li>
</ul>
@endsection

@section('script')
@parent
@include('components.highlightjs')
@endsection

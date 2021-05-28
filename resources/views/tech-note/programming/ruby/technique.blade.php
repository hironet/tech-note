@extends('layouts/app')

@php
$mtime = '2021-04-05 00:00:00';
$description = 'Rubyのコードを作成する際に、知っておくと有用な書き方について書いています。';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">変数</h2>
<p>変数がnilであることを防ぐ。</p>
<ul>
  <li>変数<code>array</code>が存在すれば何もせず、存在しなければ<code>array</code>に空の配列を代入する。</li>
</ul>
<pre class="block"><code class="ruby">array ||= []
# array || (array = []) と同じ。</code></pre>
<h2 class="title">メソッド</h2>
<p>メソッド呼び出し時のNoMethodErrorを防ぐ。</p>
<ul>
  <li>Safe Navigation Operator（<code>&amp;.</code>）を使用してメソッドを呼び出すと、レシーバが<code>nil</code>の場合でも<code>NoMethodError</code>が発生せず、<code>nil</code>を返す。</li>
</ul>
<pre class="block"><code class="ruby">str = nil
len = str&amp;.length
=> nil
# len = str ? str.length : nil と同じ。</code></pre>
@endsection

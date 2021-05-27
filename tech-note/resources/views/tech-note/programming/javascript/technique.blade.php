@extends('layouts/app')

@php
$mtime = '2021-04-05 00:00:00';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">オブジェクト</h2>
<p>型を示す文字列を取得する。</p>
<ul>
  <li><code>typeof</code>演算子は、オブジェクト型の場合、いずれも<code>object</code>が返されるが、以下の方法であれば、型を示す文字列を取得できる。</li>
</ul>
<pre class="block"><code class="javascript">var typeOf = function (obj) {
  return Object.prototype.toString.call(obj).slice(8, -1);
};

var div = document.getElementsByTagName("div");
console.log(typeOf(div));  // 「HTMLCollection」と表示される</code></pre>
@endsection

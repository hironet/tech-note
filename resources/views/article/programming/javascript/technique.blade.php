@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#object">オブジェクト</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="object" class="title">オブジェクト</h2>
<h3 class="desc">型を示す文字列を取得する</h3>
<p><code>typeof</code>演算子は、オブジェクト型の場合、いずれも<code>object</code>が返されるが、以下の方法であれば、型を示す文字列を取得できる。</p>
<pre class="code-block"><code class="javascript">var typeOf = function (obj) {
  return Object.prototype.toString.call(obj).slice(8, -1);
};

var div = document.getElementsByTagName("div");
console.log(typeOf(div));  // 「HTMLCollection」と表示される</code></pre>
@endsection

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#filter">フィルタ</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="filter" class="heading color-heading">フィルタ</h2>
<h3 class="heading lowerleftline-heading">フレーム</h3>
<h4 class="heading bottomline-heading">特定の時間でフィルタする</h4>
<pre class="code-block"><code class="shell">frame.time>="2018-04-01 12:30:00" &amp;&amp; frame.time&lt;="2018-04-01 13:00:00"</code></pre>
<ul>
  <li>「2018/04/01 12:30:00～2018/04/01 13:00:00」でフィルタする。</li>
</ul>
<h3 class="heading lowerleftline-heading">TCP</h3>
<h4 class="heading bottomline-heading">TCPフラグでフィルタする</h4>
<pre class="code-block"><code class="shell">tcp.flags.syn==1</code></pre>
<pre class="code-block"><code class="shell">tcp.flags.fin==1</code></pre>
<pre class="code-block"><code class="shell">tcp.flags.reset==1</code></pre>
<pre class="code-block"><code class="shell">tcp.flags.ack==1</code></pre>
<h4 class="heading bottomline-heading">問題のあるTCPセグメントでフィルタする</h4>
<pre class="code-block"><code class="shell">tcp.analysis.flags &amp;&amp; !tcp.analysis.window_update</code></pre>
<h3 class="heading lowerleftline-heading">HTTP</h3>
<h4 class="heading bottomline-heading">HTTPメソッドでフィルタする</h4>
<pre class="code-block"><code class="shell">http.request.method=="GET"
http.request.method=="HEAD"
http.request.method=="POST"
http.request.method=="OPTIONS"
http.request.method=="PUT"
http.request.method=="DELETE"
http.request.method=="TRACE"
http.request.method=="CONNECT"</code></pre>
<h4 class="heading bottomline-heading">HTTPステータスコードでフィルタする</h4>
<pre class="code-block"><code class="shell">http.response.code==200</code></pre>
<h4 class="heading bottomline-heading">特定のURLでフィルタする</h4>
<pre class="code-block"><code class="shell">http.request.uri contains "google.co.jp"</code></pre>
@endsection

@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
</header>
<h2 class="title">フィルタ</h2>
<h3 class="title">フレーム</h3>
<p>特定の時間でフィルタする。</p>
<ul>
  <li>「2018/04/01 12:30:00～2018/04/01 13:00:00」でフィルタする。</li>
</ul>
<pre class="block"><code class="shell">frame.time>="2018-04-01 12:30:00" &amp;&amp; frame.time&lt;="2018-04-01 13:00:00"</code></pre>
<h3 class="title">TCP</h3>
<p>TCPフラグでフィルタする。</p>
<pre class="block"><code class="shell">tcp.flags.syn==1</code></pre>
<pre class="block"><code class="shell">tcp.flags.fin==1</code></pre>
<pre class="block"><code class="shell">tcp.flags.reset==1</code></pre>
<pre class="block"><code class="shell">tcp.flags.ack==1</code></pre>
<p>問題のあるTCPセグメントでフィルタする。</p>
<pre class="block"><code class="shell">tcp.analysis.flags &amp;&amp; !tcp.analysis.window_update</code></pre>
<h3 class="title">HTTP</h3>
<p>HTTPメソッドでフィルタする。</p>
<pre class="block"><code class="shell">http.request.method=="GET"
http.request.method=="HEAD"
http.request.method=="POST"
http.request.method=="OPTIONS"
http.request.method=="PUT"
http.request.method=="DELETE"
http.request.method=="TRACE"
http.request.method=="CONNECT"</code></pre>
<p>HTTPステータスコードでフィルタする。</p>
<pre class="block"><code class="shell">http.response.code==200</code></pre>
<p>特定のURLでフィルタする。</p>
<pre class="block"><code class="shell">http.request.uri contains "google.co.jp"</code></pre>
@endsection

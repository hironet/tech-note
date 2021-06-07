@extends('layouts/app')

@section('contents')
@include('components.header')
<h2 class="title">リスト</h2>
<p>リストタグを入れ子にする。</p>
<ul>
  <li><code>&lt;ul&gt;...&lt;/ul&gt;</code>は、<code>&lt;li&gt;...&lt;/li&gt;</code>の中に入れることで、入れ子にできる。</li>
</ul>
<pre class="block"><code>&lt;ul&gt;
  &lt;li&gt;米国&lt;/li&gt;
  &lt;li&gt;中国&lt;/li&gt;
  &lt;li&gt;日本
    &lt;ul&gt;
      &lt;li&gt;東京&lt;/li&gt;
      &lt;li&gt;大阪&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<div class="box">
  <span class="box-title">表示結果</span>
  <ul>
    <li>米国</li>
    <li>中国</li>
    <li>
      日本
      <ul>
        <li>東京</li>
        <li>大阪</li>
      </ul>
    </li>
  </ul>
</div><!-- /.box -->
<ul>
  <li>以下の書き方は、<code>&lt;ul&gt;...&lt;/ul&gt;</code>が<code>&lt;li&gt;...&lt;/li&gt;</code>の中に入っていないため、誤っている。</li>
</ul>
<pre class="block"><code>&lt;ul&gt;
  &lt;li&gt;米国&lt;/li&gt;
  &lt;li&gt;中国&lt;/li&gt;
  &lt;li&gt;日本&lt;/li&gt;
  &lt;ul&gt;
    &lt;li&gt;東京&lt;/li&gt;
    &lt;li&gt;大阪&lt;/li&gt;
  &lt;/ul&gt;
&lt;/ul&gt;</code></pre>
<p>リストタグに他の要素を入れ子にする。</p>
<ul>
  <li><code>&lt;ul&gt;...&lt;/ul&gt;</code>の中には、<code>&lt;div&gt;...&lt;/div&gt;</code>、<code>&lt;span&gt;...&lt;/span&gt;</code>、<code>&lt;h1&gt;...&lt;/h1&gt;</code>、<code>&lt;p&gt;...&lt;/p&gt;</code>、<code>&lt;img&gt;</code>、などの要素を入れ子にできる。</li>
</ul>
<pre class="block"><code>&lt;ul&gt;
  &lt;li&gt;Windows
    &lt;p&gt;Microsoftが開発したオペレーティングシステム&lt;/p&gt;
  &lt;/li&gt;
  &lt;li&gt;macOS
    &lt;p&gt;アップルが開発したMacのオペレーティングシステム&lt;/p&gt;
  &lt;/li&gt;
  &lt;li&gt;Linux
    &lt;p&gt;UNIX系オペレーティングシステムの1つ&lt;/p&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<div class="box">
  <span class="box-title">表示結果</span>
  <ul>
    <li>
      Windows
      <p>Microsoftが開発したオペレーティングシステム</p>
    </li>
    <li>
      macOS
      <p>アップルが開発したMacのオペレーティングシステム</p>
    </li>
    <li>
      Linux
      <p>UNIX系オペレーティングシステムの1つ</p>
    </li>
  </ul>
</div><!-- /.box -->
@endsection

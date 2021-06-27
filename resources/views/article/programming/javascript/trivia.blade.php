@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#immediate">即時実行関数</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="immediate" class="title">即時実行関数</h2>
<h3 class="left-line">functionを使用する場合</h3>
<p>書き方は、以下の2パターンのどちらでもよい。</p>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
}());</code></pre>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
})();</code></pre>
<h3 class="left-line">アロー関数を使用する場合</h3>
<p>以下のように書く。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
})();</code></pre>
<p>以下の書き方はエラーになるので、注意が必要。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
}());</code></pre>
@endsection

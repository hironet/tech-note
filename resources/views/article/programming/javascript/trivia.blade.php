@extends('layouts/app')

@section('contents')
@include('components.header')
<h3 class="title">即時実行関数の書き方</h3>
<p>functionを使用する場合は、以下の2パターンのどちらでもよい。</p>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
}());</code></pre>
<pre class="block"><code class="javascript">(function () {
  // 処理内容
})();</code></pre>
<p>アロー関数を使用する場合は、以下のように書く。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
})();</code></pre>
<p>以下の書き方はエラーになるので、注意が必要。</p>
<pre class="block"><code class="javascript">(() => {
  // 処理内容
}());</code></pre>
@endsection

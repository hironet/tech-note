@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li><a href="#command">S3のコマンド</a></li>
    </ul>
  </nav>
</header>
<h2 id="command" class="title">S3のコマンド</h2>
<h3 class="desc">全てのバケットを一覧表示する</h3>
<pre class="block"><code class="shell">$ aws s3 ls</code></pre>
<h3 class="desc">バケット内の全てのオブジェクトを一覧表示する</h3>
<pre class="block"><code class="shell">$ aws s3 ls s3://[バケット名]</code></pre>
<h3 class="desc">東京リージョンにバケットを作成する</h3>
<pre class="block"><code class="shell">$ aws s3 mb s3://[バケット名] --region ap-northeast-1</code></pre>
<h3 class="desc">バケットを削除する</h3>
<pre class="block"><code class="shell">$ aws s3 rb s3://[バケット名]</code></pre>
<h3 class="desc">バケット内の全てのオブジェクトを削除し、バケットを削除する</h3>
<pre class="block"><code class="shell">$ aws s3 rb s3://[バケット名] --force</code></pre>
<h3 class="desc">オブジェクトを削除する</h3>
<pre class="block"><code class="shell">$ aws s3 rm s3://[バケット名]/[ファイル名]</code></pre>
<h3 class="desc">ローカルのファイルをバケットに移動する</h3>
<pre class="block"><code class="shell">$ aws s3 mv [ファイル名] s3://[バケット名]</code></pre>
<h3 class="desc">バケット内のオブジェクトをローカルのカレントディレクトリに移動する</h3>
<pre class="block"><code class="shell">$ aws s3 mv s3://[バケット名]/[ファイル名] .</code></pre>
<h3 class="desc">ローカルのファイルをバケットにコピーする</h3>
<pre class="block"><code class="shell">$ aws s3 cp [ファイル名] s3://[バケット名]</code></pre>
<h3 class="desc">バケット内のオブジェクトをローカルのカレントディレクトリにコピーする</h3>
<pre class="block"><code class="shell">$ aws s3 cp s3://[バケット名]/[ファイル名] .</code></pre>
<h3 class="desc">バケット内をカレントディレクトリと同期する</h3>
<pre class="block"><code class="shell">$ aws s3 sync . s3://[バケット名]</code></pre>
<h3 class="desc">バケット内をカレントディレクトリと同期する<br>（カレントディレクトリに存在しないファイルはバケット内から削除する）</h3>
<pre class="block"><code class="shell">$ aws s3 sync . s3://[バケット名] --delete</code></pre>
<h3 class="desc">カレントディレクトリをバケット内と同期する</h3>
<pre class="block"><code class="shell">$ aws s3 sync s3://[バケット名] .</code></pre>
<h3 class="desc">カレントディレクトリをバケット内と同期する<br>（バケット内に存在しないファイルはカレントディレクトリから削除する）</h3>
<pre class="block"><code class="shell">$ aws s3 sync s3://[バケット名] . --delete</code></pre>
@endsection

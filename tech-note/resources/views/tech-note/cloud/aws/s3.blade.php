@extends('layouts/app')

@php
$mtime = '2021-05-04 00:00:00';
@endphp

@section('contents')
@include('components.header')
<h2 class="title">S3のコマンド</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>操作</th>
        <th>コマンド</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>全てのバケットを一覧表示する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 ls</code></pre></td>
      </tr>
      <tr>
        <td>バケット内の全てのオブジェクトを一覧表示する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 ls s3://[バケット名]</code></pre></td>
      </tr>
      <tr>
        <td>東京リージョンにバケットを作成する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 mb s3://[バケット名] --region ap-northeast-1</code></pre></td>
      </tr>
      <tr>
        <td>バケットを削除する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 rb s3://[バケット名]</code></pre></td>
      </tr>
      <tr>
        <td>バケット内の全てのオブジェクトを削除し、バケットを削除する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 rb s3://[バケット名] --force</code></pre></td>
      </tr>
      <tr>
        <td>オブジェクトを削除する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 rm s3://[バケット名]/[ファイル名]</code></pre></td>
      </tr>
      <tr>
        <td>ローカルのファイルをバケットに移動する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 mv [ファイル名] s3://[バケット名]</code></pre></td>
      </tr>
      <tr>
        <td>バケット内のオブジェクトをローカルのカレントディレクトリに移動する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 mv s3://[バケット名]/[ファイル名] .</code></pre></td>
      </tr>
      <tr>
        <td>ローカルのファイルをバケットにコピーする。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 cp [ファイル名] s3://[バケット名]</code></pre></td>
      </tr>
      <tr>
        <td>バケット内のオブジェクトをローカルのカレントディレクトリにコピーする。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 cp s3://[バケット名]/[ファイル名] .</code></pre></td>
      </tr>
      <tr>
        <td>バケット内をカレントディレクトリと同期する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 sync . s3://[バケット名]</code></pre></td>
      </tr>
      <tr>
        <td>バケット内をカレントディレクトリと同期する。<br>カレントディレクトリに存在しないファイルはバケット内から削除する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 sync . s3://[バケット名] --delete</code></pre></td>
      </tr>
      <tr>
        <td>カレントディレクトリをバケット内と同期する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 sync s3://[バケット名] .</code></pre></td>
      </tr>
      <tr>
        <td>カレントディレクトリをバケット内と同期する。<br>バケット内に存在しないファイルはカレントディレクトリから削除する。</td>
        <td><pre class="inline"><code class="shell">$ aws s3 sync s3://[バケット名] . --delete</code></pre></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

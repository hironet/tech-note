@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#revision">リビジョン削除</a>
      </li>
      <li>
        <a href="#fragment">wp-postsテーブルのフラグメント化解消</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="revision" class="title">リビジョン削除</h2>
<p>1. データベース（MySQL）に接続する。</p>
<p>2. 以下SQLを実行する。</p>
<pre class="code-block"><code class="sql">USE wordpress;
SELECT COUNT(*) FROM wp_posts WHERE post_type='revision';
DELETE FROM wp_posts WHERE post_type='revision';
SELECT COUNT(*) FROM wp_posts WHERE post_type='revision';</code></pre>
<h2 id="fragment" class="title">wp-postsテーブルのフラグメント化解消</h2>
<p>1. データベース（MySQL）に接続する。</p>
<p>2. リビジョンを削除する。</p>
<p>3. 以下SQLを実行する。</p>
<pre class="code-block"><code class="sql">USE wordpress;
SELECT @@sql_mode;
SET sql_mode = '';
SELECT @@sql_mode;
OPTIMIZE TABLE wp_posts;</code></pre>
@endsection

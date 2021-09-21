@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#create">データベース作成</a>
      </li>
      <li>
        <a href="#drop">データベース削除</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="create" class="heading bgcolor-heading">データベース作成</h2>
<p>1. 作成するデータベースが存在しないことを確認する。</p>
<pre class="code-block"><code class="sql">SHOW DATABASES;</code></pre>
<p>2. データベースを作成する。</p>
<pre class="code-block"><code class="sql">CREATE DATABASE [データベース名] DEFAULT CHARACTER SET [文字コード] COLLATE [照合順序];</code></pre>
<p>3. 作成したデータベースが存在することを確認する。</p>
<pre class="code-block"><code class="sql">SHOW DATABASES;</code></pre>
<h2 id="drop" class="heading bgcolor-heading">データベース削除</h2>
<p>1. 削除するデータベースが存在することを確認する。</p>
<pre class="code-block"><code class="sql">SHOW DATABASES;</code></pre>
<p>2. データベースを削除する。</p>
<pre class="code-block"><code class="sql">DROP DATABASE [データベース名];</code></pre>
<p>3. 削除したデータベースが存在しないことを確認する。</p>
<pre class="code-block"><code class="sql">SHOW DATABASES;</code></pre>
@endsection

@section('script')
@parent
@include('components.highlightjs')
@endsection

@extends('layouts/app')

@section('contents')
@include('components.header')
<ul class="toc">
  <li>
    <a href="#database">データベース管理</a>
  </li>
  <li>
    <a href="#user">ユーザ管理</a>
  </li>
</ul>
<h2 id="database" class="title">データベース管理</h2>
<h3 class="title">データベース作成</h3>
<p>1. 作成するデータベースが存在しないことを確認する。</p>
<pre class="block"><code class="sql">SHOW DATABASES;</code></pre>
<p>2. データベースを作成する。</p>
<pre class="block"><code class="sql">CREATE DATABASE [データベース名] DEFAULT CHARACTER SET [文字コード] COLLATE [照合順序];</code></pre>
<p>3. 作成したデータベースが存在することを確認する。</p>
<pre class="block"><code class="sql">SHOW DATABASES;</code></pre>
<h3 class="title">データベース削除</h3>
<p>1. 削除するデータベースが存在することを確認する。</p>
<pre class="block"><code class="sql">SHOW DATABASES;</code></pre>
<p>2. データベースを削除する。</p>
<pre class="block"><code class="sql">DROP DATABASE [データベース名];</code></pre>
<p>3. 削除したデータベースが存在しないことを確認する。</p>
<pre class="block"><code class="sql">SHOW DATABASES;</code></pre>
<h2 id="user" class="title">ユーザ管理</h2>
<h3 class="title">ユーザ作成</h3>
<p>1. 作成するユーザが存在しないことを確認する。</p>
<pre class="block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>2. ユーザを作成する。</p>
<pre class="block"><code class="sql">CREATE USER [ユーザ名] identified by '[パスワード]';</code></pre>
<p>3. 作成したユーザが存在することを確認する。</p>
<pre class="block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>4. 作成したユーザの権限を確認する。</p>
<pre class="block"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
<p>5. 作成したユーザに特定のデータベースに対する全ての権限を付与する。</p>
<pre class="block"><code class="sql">GRANT ALL PRIVILEGES ON [データベース名].* to [ユーザ名];</code></pre>
<p>6. 作成したユーザに権限が付与されたことを確認する。</p>
<pre class="block"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
<h3 class="title">ユーザ削除</h3>
<p>1. 削除するユーザが存在することを確認する。</p>
<pre class="block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>2. ユーザを削除する。</p>
<pre class="block"><code class="sql">DROP USER [ユーザ名];</code></pre>
<p>3. 削除したユーザが存在しないことを確認する。</p>
<pre class="block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
@endsection

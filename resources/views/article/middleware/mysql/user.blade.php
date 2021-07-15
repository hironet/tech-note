@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#create">ユーザ作成</a>
      </li>
      <li>
        <a href="#drop">ユーザ削除</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="create" class="title">ユーザ作成</h2>
<p>1. 作成するユーザが存在しないことを確認する。</p>
<pre class="code-block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>2. ユーザを作成する。</p>
<pre class="code-block"><code class="sql">CREATE USER [ユーザ名] identified by '[パスワード]';</code></pre>
<p>3. 作成したユーザが存在することを確認する。</p>
<pre class="code-block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>4. 作成したユーザの権限を確認する。</p>
<pre class="code-block"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
<p>5. 作成したユーザに特定のデータベースに対する全ての権限を付与する。</p>
<pre class="code-block"><code class="sql">GRANT ALL PRIVILEGES ON [データベース名].* to [ユーザ名];</code></pre>
<p>6. 作成したユーザに権限が付与されたことを確認する。</p>
<pre class="code-block"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
<h2 id="drop" class="title">ユーザ削除</h2>
<p>1. 削除するユーザが存在することを確認する。</p>
<pre class="code-block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<p>2. ユーザを削除する。</p>
<pre class="code-block"><code class="sql">DROP USER [ユーザ名];</code></pre>
<p>3. 削除したユーザが存在しないことを確認する。</p>
<pre class="code-block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
@endsection

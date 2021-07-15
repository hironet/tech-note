@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#startup">mysqlコマンドラインクライアントの起動</a>
      </li>
      <li>
        <a href="#operation">mysqlコマンドラインクライアントの操作</a>
      </li>
      <li>
        <a href="#show">各種情報の表示</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="startup" class="title">mysqlコマンドラインクライアントの起動</h2>
<h3 class="desc">MySQLサーバに接続する</h3>
<pre class="code-block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名]</code></pre>
<h3 class="desc">SQL文を実行する</h3>
<pre class="code-block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名] -e "[コマンド]"</code></pre>
<pre class="code-block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名] -e "SOURCE [ファイル名]"</code></pre>
<h3 class="desc">使用するデータベースを選択する</h3>
<pre class="code-block"><code class="sql">use [データベース名]</code></pre>
<h2 id="operation" class="title">mysqlコマンドラインクライアントの操作</h2>
<h3 class="desc">プロンプトの文字列を変更する</h3>
<pre class="code-block"><code class="sql">prompt [プロンプトとして表示する文字列]</code></pre>
<ul>
  <li>[プロンプトとして表示する文字列]には、以下の表に示すシーケンスを使用できる。</li>
</ul>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>文字列</th>
        <th>シーケンス</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>データベース名</td>
        <td>
          <code>¥d</code>
        </td>
      </tr>
      <tr>
        <td>ホスト名</td>
        <td>
          <code>¥h</code>
        </td>
      </tr>
      <tr>
        <td>ユーザ名</td>
        <td>
          <code>¥u</code>
        </td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
<h3 class="desc">入力中の命令を<code>;</code>で実行する前にキャンセルする</h3>
<pre class="code-block"><code class="sql">SELECT * FROM user
¥c</code></pre>
<h3 class="desc">結果を縦に出力する</h3>
<pre class="code-block"><code class="sql">SELECT * FROM user¥G</code></pre>
<h3 class="desc">SQL文が保存されたテキストファイルを実行する</h3>
<pre class="code-block"><code class="sql">SOURCE [ファイル名]</code></pre>
<h2 id="show" class="title">各種情報の表示</h2>
<h3 class="desc">MySQLサーバのバージョンを表示する</h3>
<pre class="code-block"><code class="sql">SELECT version();</code></pre>
<h3 class="desc">現在のユーザ名を表示する</h3>
<pre class="code-block"><code class="sql">SELECT user();</code></pre>
<h3 class="desc">ユーザ一覧を表示する</h3>
<pre class="code-block"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
<h3 class="desc">ユーザの権限を表示する</h3>
<pre class="code-block"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
<h3 class="desc">現在のデータベース名を表示する</h3>
<pre class="code-block"><code class="sql">SELECT database();</code></pre>
<h3 class="desc">データベース一覧を表示する</h3>
<pre class="code-block"><code class="sql">SHOW DATABASES;</code></pre>
<h3 class="desc">テーブル一覧を表示する</h3>
<pre class="code-block"><code class="sql">SHOW TABLES;</code></pre>
<h3 class="desc">トリガ一覧を表示する</h3>
<pre class="code-block"><code class="sql">SHOW TRIGGERS;</code></pre>
<h3 class="desc">テーブルのカラム構造を表示する</h3>
<pre class="code-block"><code class="sql">DESC [テーブル名];</code></pre>
<h3 class="desc">ストアドプロシージャの内容を表示する</h3>
<pre class="code-block"><code class="sql">SHOW CREATE PROCEDURE [ストアドプロシージャ名];</code></pre>
<h3 class="desc">ストアドファンクションの内容を表示する</h3>
<pre class="code-block"><code class="sql">SHOW CREATE FUNCTION [ストアドファンクション名];</code></pre>
@endsection

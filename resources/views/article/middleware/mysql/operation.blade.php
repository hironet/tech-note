@extends('layouts/app')

@section('contents')
@include('components.header')
<ul class="toc">
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
<h2 id="startup" class="title">mysqlコマンドラインクライアントの起動</h2>
<p>MySQLサーバに接続する。</p>
<pre class="block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名]</code></pre>
<p>SQL文を実行する。</p>
<pre class="block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名] -e "[コマンド]"</code></pre>
<pre class="block"><code class="shell">$ mysql -u [ユーザ名] -p -h[ホスト名] [データベース名] -e "SOURCE [ファイル名]"</code></pre>
<p>使用するデータベースを選択する。</p>
<pre class="block"><code class="sql">use [データベース名]</code></pre>
<h2 id="operation" class="title">mysqlコマンドラインクライアントの操作</h2>
<p>プロンプトの文字列を変更する。</p>
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
<pre class="block"><code class="sql">prompt [プロンプトとして表示する文字列]</code></pre>
<p>入力中の命令を<code>;</code>で実行する前にキャンセルする。</p>
<pre class="block"><code class="sql">SELECT * FROM user
¥c</code></pre>
<p>結果を縦に出力する。</p>
<pre class="block"><code class="sql">SELECT * FROM user¥G</code></pre>
<p>SQL文が保存されたテキストファイルを実行する。</p>
<pre class="block"><code class="sql">SOURCE [ファイル名]</code></pre>
<h2 id="show" class="title">各種情報の表示</h2>
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
        <td>MySQLサーバのバージョンを表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SELECT version();</code></pre>
        </td>
      </tr>
      <tr>
        <td>現在のユーザ名を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SELECT user();</code></pre>
        </td>
      </tr>
      <tr>
        <td>ユーザ一覧を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SELECT user, host FROM mysql.user;</code></pre>
        </td>
      </tr>
      <tr>
        <td>ユーザの権限を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW GRANTS FOR [ユーザ名];</code></pre>
        </td>
      </tr>
      <tr>
        <td>現在のデータベース名を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SELECT database();</code></pre>
        </td>
      </tr>
      <tr>
        <td>データベース一覧を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW DATABASES;</code></pre>
        </td>
      </tr>
      <tr>
        <td>テーブル一覧を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW TABLES;</code></pre>
        </td>
      </tr>
      <tr>
        <td>トリガ一覧を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW TRIGGERS;</code></pre>
        </td>
      </tr>
      <tr>
        <td>テーブルのカラム構造を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">DESC [テーブル名];</code></pre>
        </td>
      </tr>
      <tr>
        <td>ストアドプロシージャの内容を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW CREATE PROCEDURE [ストアドプロシージャ名];</code></pre>
        </td>
      </tr>
      <tr>
        <td>ストアドファンクションの内容を表示する。</td>
        <td>
          <pre class="inline"><code class="sql">SHOW CREATE FUNCTION [ストアドファンクション名];</code></pre>
        </td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
@endsection

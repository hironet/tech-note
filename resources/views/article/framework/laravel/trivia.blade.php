@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#log">Laravelのログ</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="log" class="heading bgcolor-heading">Laravelのログ</h2>
<h3 class="heading bottomline-heading">ログを確認する</h3>
<pre class="code-block"><code class="shell">$ cd [プロジェクトのディレクトリ]
$ cat storage/logs/laravel.log</code></pre>
@endsection

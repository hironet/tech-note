@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
</header>
<h3 class="title">CapsLockキーをControlキーに変更する</h3>
<p>1. ctrl2capをインストールする。</p>
<pre class="block"><code class="shell">&gt; choco install -y ctrl2cap</code></pre>
<p>2. ctrl2capを実行する。</p>
<pre class="block"><code class="shell">&gt; cd C:\ProgramData\chocolatey\lib\ctrl2cap\tools
&gt; .\ctrl2cap.exe /install</code></pre>
<p>3. Windowsを再起動する。</p>
<h3 class="title">ユーザ個別のスタートメニューを設定する</h3>
<p>エクスプローラーを起動し、アドレスバーに<code>C:\Users\[ユーザ名]\AppData\Roaming\Microsoft\Windows\Start Menu\Programs</code>を入力する。</p>
<ul>
  <li><code>[ユーザ名]</code>の部分は、実際のユーザ名に置き換える。</li>
</ul>
<h3 class="title">ユーザ共通のスタートメニューを設定する</h3>
<p>エクスプローラーを起動し、アドレスバーに<code>C:\ProgramData\Microsoft\Windows\Start Menu\Programs</code>を入力する。</p>
@endsection

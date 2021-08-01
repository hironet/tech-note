@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#system">システム全体の設定</a>
      </li>
      <li>
        <a href="#user">ユーザ個別の設定</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="system" class="heading color-heading">システム全体の設定</h2>
<h3 class="heading bottomline-heading">CapsLockキーをControlキーに変更する</h3>
<p>1. ctrl2capをインストールする。</p>
<pre class="code-block"><code class="shell">&gt; choco install -y ctrl2cap</code></pre>
<p>2. ctrl2capを実行する。</p>
<pre class="code-block"><code class="shell">&gt; cd C:\ProgramData\chocolatey\lib\ctrl2cap\tools
&gt; .\ctrl2cap.exe /install</code></pre>
<p>3. Windowsを再起動する。</p>
<h3 class="heading bottomline-heading">ユーザ共通のスタートメニューを設定する</h3>
<p>1. エクスプローラーを起動する。</p>
<p>2. アドレスバーに<code>C:\ProgramData\Microsoft\Windows\Start Menu\Programs</code>を入力し、<kbd>Enter</kbd>を押す。</p>
<p>3. スタートメニューに表示したいショートカットを配置する、または、非表示にしたいショートカットを削除する。</p>
<h2 id="user" class="heading color-heading">ユーザ個別の設定</h2>
<h3 class="heading bottomline-heading">スタートメニューを設定する</h3>
<p>1. エクスプローラーを起動する。</p>
<p>2. アドレスバーに<code>C:\Users\[ユーザ名]\AppData\Roaming\Microsoft\Windows\Start Menu\Programs</code>を入力し、<kbd>Enter</kbd>を押す。</p>
<ul>
  <li><code>[ユーザ名]</code>の部分は、実際のユーザ名に置き換える。</li>
</ul>
<p>3. スタートメニューに表示したいショートカットを配置する、または、非表示にしたいショートカットを削除する。</p>
@endsection

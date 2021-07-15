@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#install">Homebrewのインストール</a>
      </li>
      <li>
        <a href="#command">Homebrewのコマンド</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="install" class="title">Homebrewのインストール</h3>
<p><a href="https://brew.sh/index_ja.html" target="_blank" rel="noopener noreferrer">Homebrew</a>の説明に従ってインストールする。</p>
<h2 id="command" class="title">Homebrewのコマンド</h3>
<h3 class="desc">インストールされているパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew list</code></pre>
<h3 class="desc">インストール可能なパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew search</code></pre>
<h3 class="desc">パッケージを検索する</h3>
<pre class="code-block"><code class="shell"># brew search [Formula]</code></pre>
<h3 class="desc">パッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># brew install [Formula]</code></pre>
<h3 class="desc">GUIパッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># brew install [Formula] --cask</code></pre>
<h3 class="desc">パッケージをアンインストールする</h3>
<pre class="code-block"><code class="shell"># brew uninstall [Formula]</code></pre>
<h3 class="desc">Homebrew本体とFormulaを更新する</h3>
<pre class="code-block"><code class="shell"># brew outdated --cask --greedy</code></pre>
<h3 class="desc">バージョンが古くなったパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew update</code></pre>
<h3 class="desc">バージョンが古くなったGUIパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew outdated</code></pre>
<h3 class="desc">インストールされている全てのパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade</code></pre>
<h3 class="desc">インストールされている全てのGUIパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade --cask --greedy</code></pre>
<h3 class="desc">インストールされている個別のパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade [Formula]</code></pre>
<h3 class="desc">Homebrewの問題を診断する</h3>
<pre class="code-block"><code class="shell"># brew doctor</code></pre>
@endsection

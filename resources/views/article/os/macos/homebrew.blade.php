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
<h2 id="install" class="heading bgcolor-heading">Homebrewのインストール</h3>
<p><a href="https://brew.sh/index_ja.html" target="_blank" rel="noopener noreferrer">Homebrew</a>の説明に従ってインストールする。</p>
<h2 id="command" class="heading bgcolor-heading">Homebrewのコマンド</h3>
<h3 class="heading bottomline-heading">インストールされているパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew list</code></pre>
<h3 class="heading bottomline-heading">インストール可能なパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew search</code></pre>
<h3 class="heading bottomline-heading">パッケージを検索する</h3>
<pre class="code-block"><code class="shell"># brew search [Formula]</code></pre>
<h3 class="heading bottomline-heading">パッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># brew install [Formula]</code></pre>
<h3 class="heading bottomline-heading">GUIパッケージをインストールする</h3>
<pre class="code-block"><code class="shell"># brew install --cask [Formula]</code></pre>
<h3 class="heading bottomline-heading">パッケージをアンインストールする</h3>
<pre class="code-block"><code class="shell"># brew uninstall [Formula]</code></pre>
<h3 class="heading bottomline-heading">Homebrew本体とFormulaを更新する</h3>
<pre class="code-block"><code class="shell"># brew update</code></pre>
<h3 class="heading bottomline-heading">バージョンが古くなったパッケージ一覧を表示する</h3>
<pre class="code-block"><code class="shell"># brew outdated</code></pre>
<h3 class="heading bottomline-heading">インストールされている全てのパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade</code></pre>
<h3 class="heading bottomline-heading">インストールされている全てのGUIパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade --cask --greedy</code></pre>
<h3 class="heading bottomline-heading">インストールされている個別のパッケージを更新する</h3>
<pre class="code-block"><code class="shell"># brew upgrade [Formula]</code></pre>
<h3 class="heading bottomline-heading">Homebrewの問題を診断する</h3>
<pre class="code-block"><code class="shell"># brew doctor</code></pre>
@endsection

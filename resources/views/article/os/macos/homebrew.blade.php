@extends('layouts/app')

@section('contents')
@include('components.header')
<ul class="toc">
  <li>
    <a href="#homebrew-install">Homebrewのインストール</a>
  </li>
  <li>
    <a href="#homebrew-command">Homebrewのコマンド</a>
  </li>
</ul>
<h2 id="homebrew-install" class="title">Homebrewのインストール</h3>
<p><a href="https://brew.sh/index_ja.html" target="_blank" rel="noopener noreferrer">Homebrew</a>の説明に従ってインストールする。</p>
<h2 id="homebrew-command" class="title">Homebrewのコマンド</h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>コマンド</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>インストールされているパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code class="shell"># brew list</code></pre></td>
    </tr>
    <tr>
      <td>インストール可能なパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code class="shell"># brew search</code></pre></td>
    </tr>
    <tr>
      <td>パッケージ情報を検索する。</td>
      <td><pre class="inline"><code class="shell"># brew search [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをインストールする。</td>
      <td><pre class="inline"><code class="shell"># brew install [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>GUIパッケージをインストールする。</td>
      <td><pre class="inline"><code class="shell"># brew install [Formula] --cask</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをアンインストールする。</td>
      <td><pre class="inline"><code class="shell"># brew uninstall [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>Homebrew本体とFormulaを更新する。</td>
      <td><pre class="inline"><code class="shell"># brew update</code></pre></td>
    </tr>
    <tr>
      <td>バージョンが古くなったパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code class="shell"># brew outdated</code></pre></td>
    </tr>
    <tr>
      <td>バージョンが古くなったGUIパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code class="shell"># brew outdated --cask --greedy</code></pre></td>
    </tr>
    <tr>
      <td>インストールされている全てのパッケージを更新する。</td>
      <td><pre class="inline"><code class="shell"># brew upgrade</code></pre></td>
    </tr>
    <tr>
      <td>インストールされている全てのGUIパッケージを更新する。</td>
      <td><pre class="inline"><code class="shell"># brew upgrade --cask --greedy</code></pre></td>
    </tr>
    <tr>
      <td>インストールされている個別のパッケージを更新する。</td>
      <td><pre class="inline"><code class="shell"># brew upgrade [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>Homebrewの問題を診断する。</td>
      <td><pre class="inline"><code class="shell"># brew doctor</code></pre></td>
    </tr>
  </tbody>
</table>
@endsection

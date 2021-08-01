@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#basic">基本設定</a>
      </li>
      <li>
        <a href="#programming">プログラミング言語固有の設定</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="basic" class="heading title-2">基本設定</h2>
<p>1. コマンドパレットを開く。</p>
<p>2. <code>settings.json</code>と入力する。</p>
<p>3. <code>基本設定: 設定 (JSON) を開く</code>を選択し、<kbd>Enter</kbd>を押す。</p>
<h2 id="programming" class="heading title-2">プログラミング言語固有の設定</h2>
<p>1. コマンドパレットを開く。</p>
<p>2. <code>Preferences: Configure Language Specific Settings</code>と入力する。</p>
<p>3. <code>基本設定: 言語固有の設定を構成します</code>を選択し、<kbd>Enter</kbd>を押す。</p>
<p>4. 設定したいプログラミング言語を選択し、<kbd>Enter</kbd>を押す。</p>
@endsection

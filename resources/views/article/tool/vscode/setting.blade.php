@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
</header>
<h2 class="title">基本設定</h2>
<p>1. コマンドパレットを開く。</p>
<p>2. <code>settings.json</code>と入力する。</p>
<p>3. <code>基本設定: 設定 (JSON) を開く</code>を選択し、<kbd>Enter</kbd>を押す。</p>
<h2 class="title">プログラミング言語固有の設定</h2>
<p>1. コマンドパレットを開く。</p>
<p>2. <code>Preferences: Configure Language Specific Settings</code>と入力する。</p>
<p>3. <code>基本設定: 言語固有の設定を構成します</code>を選択し、<kbd>Enter</kbd>を押す。</p>
<p>4. 設定したいプログラミング言語を選択し、<kbd>Enter</kbd>を押す。</p>
@endsection

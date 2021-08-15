@extends('layouts/app')

@section('head')
@parent
<meta name="robots" content="noindex">
@endsection

@section('contents')
<header>
  <h1>{{ $article_title }}</h1>
</header>
@endsection

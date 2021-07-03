@extends('layouts/app')

@php
$noindex = true;
@endphp

@section('contents')
<header>
  <h1>{{ $article_title }}</h1>
</header>
@endsection

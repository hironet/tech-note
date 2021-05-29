@extends('layouts/app')

@section('contents')
@include('components.header')
<div class="row">
@foreach ($article_titles as $_article_id => $article_info)
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <h5 class="card-title">{{ $article_info[1] }}</h5>
        <a href="{{ $article_info[0] }}" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
@endforeach
</div><!-- row -->
@endsection

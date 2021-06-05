@extends('layouts/app')

@section('contents')
@include('components.header')
<div class="row">
@foreach ($article_titles as $_article_id => $_article_info)
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <a href="{{ $_article_info[0] }}" class="card-link">
          <h5 class="card-title">{{ $_article_info[1] }}</h5>
        </a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
@endforeach
</div><!-- row -->
@endsection

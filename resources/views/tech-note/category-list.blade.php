@extends('layouts/app')

@section('contents')
@include('components.header')
<div class="row">
@foreach ($page_titles as $_subcategory_id => $_pages)
@foreach ($_pages as $_page_id => $_page_info)
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <h5 class="card-title">{{ $_page_info[1] }}</h5>
        <a href="{{ $_page_info[0] }}" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
@endforeach
@endforeach
</div><!-- row -->
@endsection

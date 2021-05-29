@extends('layouts/app')

@section('contents')
<div class="row">
@foreach ($subcategory_names as $_category => $_subcategories)
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-header">
        <a href="{{ $category_names[$_category][0] }}">{{ $category_names[$_category][1] }}</a>
      </div>
      <ul class="list-group list-group-flush">
@foreach ($_subcategories as $_subcategory => $_subcategory_info)
        <li class="list-group-item">
          <a href="{{ $_subcategory_info[0] }}">{{ $_subcategory_info[1] }}</a>
        </li>
@endforeach
      </ul>
    </div><!-- card -->
  </div><!-- col -->
@endforeach
</div><!-- row -->
@endsection

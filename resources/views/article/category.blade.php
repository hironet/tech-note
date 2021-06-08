@extends('layouts/app')

@section('contents')
@include('components.header')
<div class="row">
@foreach ($article_titles as $_subcategory => $_articles)
@foreach ($_articles as $_article_id => $_article_info)
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <a href="{{ $_article_info[0] }}" class="card-link">
          <h5 class="card-title">{{ $_article_info[1] }}</h5>
        </a>
        <p>更新日：
          <time itemprop="dateModified" datetime="{{ (new DateTime($_article_info[3]))->format(DateTime::ATOM) }}">
            {{ (new DateTime($_article_info[3]))->format('Y年m月d日') }}
          </time>
        </p>
      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div><!-- /.col -->
@endforeach
@endforeach
</div><!-- /.row -->
@endsection

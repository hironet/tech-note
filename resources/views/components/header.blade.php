<header>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">ホーム</a>
      </li>
@foreach ($breadcrumb as $_name => $_url)
@empty ($_url)
      <li class="breadcrumb-item active" aria-current="page">{{ $_name }}</li>
@else
      <li class="breadcrumb-item">
        <a href="{{ $_url }}">{{ $_name }}</a>
      </li>
@endempty
@endforeach
    </ol>
  </nav>
  <h1>{{ $page_title }}</h1>
@if (isset($mtime))
  <p>更新日：
    <time itemprop="dateModified" datetime="{{ (new DateTime($mtime))->format(DateTime::ATOM) }}">
      {{ (new DateTime($mtime))->format('Y年m月d日') }}
    </time>
  </p>
@endif
</header>

<!DOCTYPE html>
<html lang="ja">
<head>
@if ( config('app.env') === 'production')
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KYRNHWQZPC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-KYRNHWQZPC');
  </script>
@endif
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
@empty ($article_description)
  <meta name="description" content="{{ config('article.SITE_DESC') }}">
@else
  <meta name="description" content="{{ config('article.SITE_DESC') }}{{ $article_description }}">
@endempty
@isset ($noindex)
  <meta name="robots" content="noindex">
@endisset
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link href="{{ secure_asset('/css/common.css') }}" rel="stylesheet">
@empty ($article_title)
  <title>{{ config('article.SITE_NAME') }}</title>
@else
  <title>{{ $article_title }} | {{ config('article.SITE_NAME') }}</title>
@endempty
</head>
<body>
  <header>
@include('components.navbar')
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
        <main>
@yield('contents')
        </main>
      </div><!-- /.col -->
      <div class="col-12 col-lg-3">
        <aside>
@include('components.sidebar')
        </aside>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  <hr class="featurette-divider">
  <footer>
    <div class="container text-center my-3">
      <small>&copy; {{ date('Y') }} ITエンジニアHiro</small>
    </div>
    <button id="page-top"></button>
  </footer>
  <!-- for Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <!-- for highlight.js -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/hybrid.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <!-- for tech-note.engineer-hiro.com common.js -->
  <script src="{{ secure_asset('/js/common.js') }}"></script>
</body>
</html>

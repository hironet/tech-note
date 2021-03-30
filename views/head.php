<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="このサイトは、ITエンジニアHiroの技術メモです。<?= $meta_description ?>">
<meta name="keywords" content="Hiro,技術メモ,tech note<?= empty($meta_keywords) ? '' : ',' . $meta_keywords ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" tegrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title><?= empty($contents_title) ? '' : $contents_title . ' | ' ?>Hiro's tech note</title>
<style>
  p, ul, ol, li {
    margin: 0;
    padding: 0;
  }

  body {
    padding-top: 5rem;
  }

  nav.navbar {
    background-color: #5c73b7;
    opacity: 0.9;
  }

  h2.title {
    background-color: #5c73b7;
    color: #ffffff;
    font-size: 2rem;
    margin: 2rem 0 0.5rem;
    opacity: 0.9;
    padding: 0.2rem 0.5rem;
  }

  h3.title {
    background-color: #5c73b7;
    color: #ffffff;
    font-size: 1.5rem;
    margin: 2rem 0 0.5rem;
    opacity: 0.9;
    padding: 0.2rem 0.5rem;
  }

  ul, ol {
    padding-left: 2rem;
  }

  pre.block {
    margin: 0.2rem 0 1rem 1rem;
    padding: 0.2rem 0.5rem;
  }

  pre.inline {
    margin: 0;
    padding: 0.2rem 0.5rem;
  }

  code {
    font-family: Monaco, Menlo, Consolas, 'Courier New', Courier, monospace, sans-serif;
  }
</style>

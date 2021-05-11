<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="このサイトは、ITエンジニアHiroの技術メモです。<?= $contents_desc ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<title><?= empty($contents_title) ? '' : $contents_title . ' | ' ?><?= SITE_NAME ?></title>
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

  div.profile-box {
    border: solid 1px #000;
    border-radius: 8px;
    padding: 0.5rem 1rem;
    position: relative;
  }

  div.box {
    border: solid 3px #95ccff;
    border-radius: 8px;
    margin: 2rem 0 1rem 1rem;
    padding: 0.5rem 1rem;
    position: relative;
  }

  div.box .box-title {
    background: #FFF;
    color: #95ccff;
    display: inline-block;
    font-size: 19px;
    font-weight: bold;
    left: 10px;
    line-height: 1;
    padding: 0 9px;
    position: absolute;
    top: -13px;
  }
</style>

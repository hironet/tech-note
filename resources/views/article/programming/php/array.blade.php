@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#1dime-array">1次元配列の基本操作</a>
      </li>
      <li>
        <a href="#2dime-array">2次元配列の基本操作</a>
      </li>
      <li>
        <a href="#string">配列と文字列</a>
      </li>
      <li>
        <a href="#function">配列と関数</a>
      </li>
      <li>
        <a href="#convenient-oper">配列の便利な操作</a>
      </li>
      <li>
        <a href="#convenient-func">配列の便利な関数</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="1dime-array" class="title">1次元配列の基本操作</h2>
<h3 class="left-line">空の1次元配列の作成</h3>
<h4 class="desc">array()で空の配列を作成する</h4>
<pre class="block"><code class="php">$colors = array();</code></pre>
<h4 class="desc">短縮構文で空の配列を作成する</h4>
<pre class="block"><code class="php">$colors = [];</code></pre>
<h3 class="left-line">1次元配列の作成・初期化（添字配列の場合）</h3>
<h4 class="desc">array()で添字配列を作成・初期化する</h4>
<pre class="block"><code class="php">$colors = array('red', 'green', 'blue');
echo $colors[0], PHP_EOL;  # red</code></pre>
<h4 class="desc">短縮構文で添字配列を作成・初期化する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
echo $colors[2], PHP_EOL;  # blue</code></pre>
<h3 class="left-line">1次元配列の作成・初期化（連想配列の場合）</h3>
<h4 class="desc">array()で連想配列を作成・初期化する</h4>
<pre class="block"><code class="php">$product = array('product_no' => 11, 'product_name' => 'iPhone 12', 'price' => 94380);
echo $product['product_name'], PHP_EOL;  # iPhone 12</code></pre>
<h4 class="desc">短縮構文で連想配列を作成・初期化する</h4>
<pre class="block"><code class="php">$product = ['product_no' => 11, 'product_name' => 'iPhone 12', 'price' => 94380];
echo $product['price'], PHP_EOL;  # 94380</code></pre>
<h2 id="2dime-array" class="title">2次元配列の基本操作</h2>
<h3 class="left-line">2次元配列の作成・初期化（添字配列の場合）</h3>
<h4 class="desc">array()で添字配列を作成・初期化する</h4>
<pre class="block"><code class="php">$colors = array(
  array('red', 'green', 'blue'),
  array('yellow', 'cyan', 'magenta'),
  array('black', 'white')
);
echo $colors[0][0], PHP_EOL;  # red</code></pre>
<h4 class="desc">短縮構文で添字配列を作成・初期化する</h4>
<pre class="block"><code class="php">$colors = [
  ['red', 'green', 'blue'],
  ['yellow', 'cyan', 'magenta'],
  ['black', 'white']
];
echo $colors[2][1], PHP_EOL;  # white</code></pre>
<h3 class="left-line">2次元配列の作成・初期化（連想配列の場合）</h3>
<h4 class="desc">array()で連想配列を作成・初期化する</h4>
<pre class="block"><code class="php">$products = array(
  array('product_no' => 11, 'product_name' => 'iPhone 12', 'price' => 94380),
  array('product_no' => 12, 'product_name' => 'iPhone 12 Pro', 'price' => 117480),
  array('product_no' => 13, 'product_name' => 'iPhone 12 Pro Max', 'price' => 129580)
);
echo $products[1]['product_name'], PHP_EOL;  # iPhone 12 Pro
</code></pre>
<h4 class="desc">短縮構文で連想配列を作成・初期化する</h4>
<pre class="block"><code class="php">$products = [
  ['product_no' => 11, 'product_name' => 'iPhone 12', 'price' => 94380],
  ['product_no' => 12, 'product_name' => 'iPhone 12 Pro', 'price' => 117480],
  ['product_no' => 13, 'product_name' => 'iPhone 12 Pro Max', 'price' => 129580]
];
echo $products[2]['price'], PHP_EOL;  # 129580
</code></pre>
<h2 id="string" class="title">配列と文字列</h2>
<h3 class="left-line">文字列への展開</h3>
<h4 class="desc">添字配列を文字列内に展開する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
echo "色は{$colors[0]}です。", PHP_EOL;  # 色はredです。</code></pre>
<ul>
  <li>配列を<code>{}</code>で囲む。</li>
</ul>
<h4 class="desc">連想配列の値を文字列内に展開する</h4>
<pre class="block"><code class="php">$product = ['product_no' => 11, 'product_name' => 'iPhone 12', 'price' => 94380];
echo "製品名は{$product['product_name']}です。", PHP_EOL;  # 製品名はiPhone12です。</code></pre>
<ul>
  <li>配列を<code>{}</code>で囲む。</li>
</ul>
<h2 id="function" class="title">配列と関数</h2>
<h3 class="left-line">関数への参照渡し</h3>
<h4 class="desc">配列の参照を関数に渡し、関数内で配列の値を変更する</h4>
<pre class="block"><code class="php">function change_color(&amp;$colors) {
  $colors[1] = 'yellow';
}

$colors = array('red', 'green', 'blue');
echo $colors[0], PHP_EOL;  # red
echo $colors[1], PHP_EOL;  # green
echo $colors[2], PHP_EOL;  # brue
change_color($colors);
echo $colors[0], PHP_EOL;  # red
echo $colors[1], PHP_EOL;  # yellow
echo $colors[2], PHP_EOL;  # brue
</code></pre>
<ul>
  <li>関数の引数名の前に<code>&amp;</code>を付ける。</li>
</ul>
<h2 id="convenient-oper" class="title">配列の便利な操作</h2>
<h3 class="left-line">配列の分解（list構文の場合）</h3>
<h4 class="desc">配列から複数の変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
list($color_1, $color_2, $color_3) = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_2, PHP_EOL;  # green
echo $color_3, PHP_EOL;  # blue</code></pre>
<h4 class="desc">配列の1番目と2番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
list($color_1, $color_2) = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_2, PHP_EOL;  # green</code></pre>
<h4 class="desc">配列の1番目と3番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
list($color_1, , $color_3) = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_3, PHP_EOL;  # blue</code></pre>
<h4 class="desc">配列の3番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
list(, , $color_3) = $colors;
echo $color_3, PHP_EOL;  # blue</code></pre>
<h3 class="left-line">配列の分解（短縮構文の場合）</h3>
<h4 class="desc">配列から複数の変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
[$color_1, $color_2, $color_3] = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_2, PHP_EOL;  # green
echo $color_3, PHP_EOL;  # blue</code></pre>
<h4 class="desc">配列の1番目と2番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
[$color_1, $color_2] = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_2, PHP_EOL;  # green</code></pre>
<h4 class="desc">配列の1番目と3番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
[$color_1, , $color_3] = $colors;
echo $color_1, PHP_EOL;  # red
echo $color_3, PHP_EOL;  # blue</code></pre>
<h4 class="desc">配列の3番目の要素のみ変数に代入する</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
[, , $color_3] = $colors;
echo $color_3, PHP_EOL;  # blue</code></pre>
<h2 id="convenient-func" class="title">配列の便利な関数</h2>
<h3 class="left-line">count関数</h3>
<h4 class="desc">配列の要素数をカウントする</h4>
<pre class="block"><code class="php">$colors = ['red', 'green', 'blue'];
echo count($colors);  # 3</code></pre>
@endsection

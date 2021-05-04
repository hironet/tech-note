<?php
$ptime = '2021-05-04 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">目次</h2>
<ul>
  <li>
    <a href="#1dime-array">1次元配列の基本操作</a>
  </li>
  <li>
    <a href="#string">配列と文字列</a>
  </li>
  <li>
    <a href="#convenient">配列の便利な操作</a>
  </li>
</ul>
<h2 id="1dime-array" class="title">1次元配列の基本操作</h2>
<h3 class="title">配列の作成</h3>
<p>array()で空の配列を作成する。</p>
<pre class="block"><code>$array = array();</code></pre>
<p>短縮構文で空の配列を作成する。</p>
<pre class="block"><code>$array = [];</code></pre>
<h3 class="title">添字配列の初期化</h3>
<p>array()で添字配列を初期化する。</p>
<pre class="block"><code>$array = array('red', 'green', 'blue');
echo $array[0];  # red</code></pre>
<p>短縮構文で添字配列を初期化する。</p>
<pre class="block"><code>$array = ['red', 'green', 'blue'];
echo $array[2];  # blue</code></pre>
<h3 class="title">連想配列の初期化</h3>
<p>array()で連想配列を初期化する。</p>
<pre class="block"><code>$array = array('order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380);
echo $array['product_name'];  # iPhone 12</code></pre>
<p>短縮構文で連想配列を初期化する。</p>
<pre class="block"><code>$array = ['order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380];
echo $array['price'];  # 94380</code></pre>
<h2 id="string" class="title">配列と文字列</h2>
<p>1次元配列の値を文字列内に展開する。</p>
<ul>
  <li>配列を<code>{}</code>で囲む必要はない。</li>
  <li>キーを<code>'</code>（シングルクォーテーション）で囲んではならない。</li>
</ul>
<pre class="block"><code>$array = ['order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380];
echo "製品名は{$array[product_name]}です。";  # 製品名はiPhone12です。
echo "製品名は$array[product_name]です。";  # 製品名はiPhone12です。</code></pre>
<p>多次元配列の値を文字列内に展開する。</p>
<ul>
  <li>必ず配列を<code>{}</code>で囲む必要がある。</li>
  <li>キーを<code>'</code>（シングルクォーテーション）で囲んではならない。</li>
</ul>
<pre class="block"><code>$array = [
  ['order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380],
  ['order_no' => 11, 'product_name' => 'iPhone 12 Pro', 'price' => 117,480],
  ['order_no' => 12, 'product_name' => 'iPhone 12 Pro Max', 'price' => 129,580]
];
echo "製品名は{$array[1][product_name]}です。";  # 製品名はiPhone12 Proです。</code></pre>
<h2 id="convenient" class="title">配列の便利な操作</h2>
<h3 class="title">list構文</h3>
<p>配列から複数の変数に代入する。</p>
<pre class="block"><code>$color_array = ['red', 'green, 'blue'];
list($color_1, $color_2, $color_3) = $color_array;
echo "${$color_1}, ${$color_2}, ${$color_3}";  # red, green, blue</code></pre>

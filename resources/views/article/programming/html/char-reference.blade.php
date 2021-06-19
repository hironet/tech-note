@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
</header>
<h2 class="title">文字参照一覧</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>文字</th>
        <th>数値文字参照（10進数）</th>
        <th>文字実体参照</th>
        <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>&quot;</td>
        <td>&amp;#34;</td>
        <td>&amp;quot;</td>
        <td>ダブルクォート</td>
      </tr>
      <tr>
        <td>&amp;</td>
        <td>&amp;#38;</td>
        <td>&amp;amp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&apos;</td>
        <td>&amp;#39;</td>
        <td>&amp;apos;</td>
        <td>シングルクォート</td>
      </tr>
      <tr>
        <td>&lt;</td>
        <td>&amp;#60;</td>
        <td>&amp;lt;</td>
        <td></td>
      </tr>
      <tr>
        <td>&gt;</td>
        <td>&amp;#62;</td>
        <td>&amp;gt;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&amp;#160;</td>
        <td>&amp;nbsp;</td>
        <td>ノーブレークスペース</td>
      </tr>
      <tr>
        <td>&copy;</td>
        <td>&amp;#169;</td>
        <td>&amp;copy;</td>
        <td>コピーライトマーク</td>
      </tr>
      <tr>
        <td>&#8963;</td>
        <td>&amp;#8963;</td>
        <td></td>
        <td>Mac controlキー</td>
      </tr>
      <tr>
        <td>&#8679;</td>
        <td>&amp;#8679;</td>
        <td></td>
        <td>Mac shiftキー</td>
      </tr>
      <tr>
        <td>&#8682;</td>
        <td>&amp;#8682;</td>
        <td></td>
        <td>Mac capsキー</td>
      </tr>
      <tr>
        <td>&#8984;</td>
        <td>&amp;#8984;</td>
        <td></td>
        <td>Mac commandキー</td>
      </tr>
      <tr>
        <td>&#8997;</td>
        <td>&amp;#8997;</td>
        <td></td>
        <td>Mac optionキー</td>
      </tr>
      <tr>
        <td>&#9003;</td>
        <td>&amp;#9003;</td>
        <td></td>
        <td>Mac deleteキー</td>
      </tr>
      <tr>
        <td>&#9099;</td>
        <td>&amp;#9099;</td>
        <td></td>
        <td>Mac escキー</td>
      </tr>
      <tr>
        <td>&#9166;</td>
        <td>&amp;#9166;</td>
        <td></td>
        <td>Mac returnキー</td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($category_id = '', $subcategory_id = '', $article_id = '') {
        $data['site_name'] = config('const.SITE_NAME');
        $data['category_names'] = config('const.CATEGORY_NAMES');
        $data['subcategory_names'] = config('const.SUBCATEGORY_NAMES');
  
        if (array_key_exists($category_id, config('const.CATEGORY_NAMES'))) {
            if (empty($subcategory_id)) {
                /* カテゴリ画面 */
                $data['breadcrumb'] = [
                    config('const.CATEGORY_NAMES')[$category_id][1] => '',
                ];
                $data['article_title'] = config('const.CATEGORY_NAMES')[$category_id][1];
                $data['article_titles'] = config('const.ARTICLE_TITLES')[$category_id];
                return view('article.category', $data);
            } else if (array_key_exists($subcategory_id, config('const.SUBCATEGORY_NAMES')[$category_id])) {
                if (empty($article_id)) {
                    /* サブカテゴリ画面 */
                    $data['breadcrumb'] = [
                        config('const.CATEGORY_NAMES')[$category_id][1] => config('const.CATEGORY_NAMES')[$category_id][0],
                        config('const.SUBCATEGORY_NAMES')[$category_id][$subcategory_id][1] => '',
                    ];
                    $data['article_title'] = config('const.SUBCATEGORY_NAMES')[$category_id][$subcategory_id][1];
                    $data['article_titles'] = config('const.ARTICLE_TITLES')[$category_id][$subcategory_id];
                    return view('article.subcategory', $data);
                } else if (array_key_exists($article_id, config('const.ARTICLE_TITLES')[$category_id][$subcategory_id])) {
                    /* 個別画面 */
                    $data['breadcrumb'] = [
                        config('const.CATEGORY_NAMES')[$category_id][1] => config('const.CATEGORY_NAMES')[$category_id][0],
                        config('const.SUBCATEGORY_NAMES')[$category_id][$subcategory_id][1] => config('const.SUBCATEGORY_NAMES')[$category_id][$subcategory_id][0],
                    ];
                    $data['article_title'] = config('const.ARTICLE_TITLES')[$category_id][$subcategory_id][$article_id][1];
                    return view("article.{$category_id}.{$subcategory_id}.{$article_id}", $data);
                }
            }
        }
        $data['article_title'] = 'Not Found';
        return view('article.404', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($category = '', $subcategory = '', $article = '') {
        $data['site_name'] = config('const.SITE_NAME');
        $data['category_names'] = config('const.CATEGORY_NAMES');
        $data['subcategory_names'] = config('const.SUBCATEGORY_NAMES');

        if (array_key_exists($category, config('const.CATEGORY_NAMES'))) {
            if (empty($subcategory)) {
                /* カテゴリ画面 */
                $data['breadcrumb'] = [
                    config('const.CATEGORY_NAMES')[$category][1] => '',
                ];
                $data['article_title'] = config('const.CATEGORY_NAMES')[$category][1];
                $data['article_titles'] = config('const.ARTICLE_TITLES')[$category];
                return view('article.category', $data);
            } else if (array_key_exists($subcategory, config('const.SUBCATEGORY_NAMES')[$category])) {
                if (empty($article)) {
                    /* サブカテゴリ画面 */
                    $data['breadcrumb'] = [
                        config('const.CATEGORY_NAMES')[$category][1] => config('const.CATEGORY_NAMES')[$category][0],
                        config('const.SUBCATEGORY_NAMES')[$category][$subcategory][1] => '',
                    ];
                    $data['article_title'] = config('const.SUBCATEGORY_NAMES')[$category][$subcategory][1];
                    $data['article_titles'] = config('const.ARTICLE_TITLES')[$category][$subcategory];
                    return view('article.subcategory', $data);
                } else if (array_key_exists($article, config('const.ARTICLE_TITLES')[$category][$subcategory])) {
                    /* 個別画面 */
                    $data['breadcrumb'] = [
                        config('const.CATEGORY_NAMES')[$category][1] => config('const.CATEGORY_NAMES')[$category][0],
                        config('const.SUBCATEGORY_NAMES')[$category][$subcategory][1] => config('const.SUBCATEGORY_NAMES')[$category][$subcategory][0],
                    ];
                    $data['article_title'] = config('const.ARTICLE_TITLES')[$category][$subcategory][$article][1];
                    return view("article.{$category}.{$subcategory}.{$article}", $data);
                }
            }
        }
        $data['article_title'] = 'Not Found';
        return view('article.404', $data);
    }
}

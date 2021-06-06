<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($category = '', $subcategory = '', $article = '') {
        if (array_key_exists($category, config('article.CATEGORY_NAMES'))) {
            if (empty($subcategory)) {
                /* カテゴリ画面 */
                $data['breadcrumb'] = [
                    config('article.CATEGORY_NAMES')[$category][1] => '',
                ];
                $data['article_title'] = config('article.CATEGORY_NAMES')[$category][1];
                $data['article_titles'] = config('article.ARTICLE_TITLES')[$category];
                return view('article.category', $data);
            } else if (array_key_exists($subcategory, config('article.SUBCATEGORY_NAMES')[$category])) {
                if (empty($article)) {
                    /* サブカテゴリ画面 */
                    $data['breadcrumb'] = [
                        config('article.CATEGORY_NAMES')[$category][1] => config('article.CATEGORY_NAMES')[$category][0],
                        config('article.SUBCATEGORY_NAMES')[$category][$subcategory][1] => '',
                    ];
                    $data['article_title'] = config('article.SUBCATEGORY_NAMES')[$category][$subcategory][1];
                    $data['article_titles'] = config('article.ARTICLE_TITLES')[$category][$subcategory];
                    return view('article.subcategory', $data);
                } else if (array_key_exists($article, config('article.ARTICLE_TITLES')[$category][$subcategory])) {
                    /* 個別画面 */
                    $data['breadcrumb'] = [
                        config('article.CATEGORY_NAMES')[$category][1] => config('article.CATEGORY_NAMES')[$category][0],
                        config('article.SUBCATEGORY_NAMES')[$category][$subcategory][1] => config('article.SUBCATEGORY_NAMES')[$category][$subcategory][0],
                    ];
                    $data['article_title'] = config('article.ARTICLE_TITLES')[$category][$subcategory][$article][1];
                    return view("article.{$category}.{$subcategory}.{$article}", $data);
                }
            }
        }
        $data['article_title'] = 'Not Found';
        return view('404', $data);
    }
}

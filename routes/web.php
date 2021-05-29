<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    $data['site_name'] = config('const.SITE_NAME');
    $data['category_names'] = config('const.CATEGORY_NAMES');
    $data['subcategory_names'] = config('const.SUBCATEGORY_NAMES');

    return view('welcome', $data);
});

use App\Http\Controllers\ArticleController;
Route::get('/article/{category?}/{subcategory?}/{article?}', ArticleController::class);

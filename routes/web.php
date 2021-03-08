<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq_old', [HomeController::class, 'faq_old'])->name('faq_old');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/tag', [HomeController::class, 'tag'])->name('tag');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/news/{id}/{slug}', [HomeController::class, 'news'])->name('news');
Route::get('/category/{id}/{slug}', [HomeController::class, 'category'])->name('category');
Route::post('/getnews',[HomeController::class,'getnews'])->name('getnews');
Route::get('/postlist/{search}', [HomeController::class, 'postlist'])->name('postlist');


Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('category', [CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');

        #News
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'index'])->name('admin_news');
            Route::get('create', [NewsController::class, 'create'])->name('admin_news_add');
            Route::post('store', [NewsController::class, 'store'])->name('admin_news_store');
            Route::get('edit/{id}', [NewsController::class, 'edit'])->name('admin_news_edit');
            Route::post('update/{id}', [NewsController::class, 'update'])->name('admin_news_update');
            Route::get('delete/{id}', [NewsController::class, 'destroy'])->name('admin_news_delete');
            Route::get('show', [NewsController::class, 'show'])->name('admin_news_show');
        });

        #Messages
        Route::prefix('message')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        #Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{news_id}', [ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{news_id}', [ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{news_id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [ImageController::class, 'show'])->name('admin_image_show');
        });

        #Review
        Route::prefix('review')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');
        });

        #Setting
        Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
        Route::post('/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');

        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', array(FaqController::class, 'index'))->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

    });
});
Route::middleware('auth')->prefix('account')->namespace('account')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreivew/{id}',[UserController::class,'destroymyreview'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

    Route::prefix('news')->group(function (){
        Route::get('/',[\App\Http\Controllers\NewsController::class,'index'])->name('user_news');
        Route::get('create',[\App\Http\Controllers\NewsController::class,'create'])->name('user_news_add');
        Route::post('store',[\App\Http\Controllers\NewsController::class,'store'])->name('user_news_store');
        Route::get('edit/{id}',[\App\Http\Controllers\NewsController::class,'edit'])->name('user_news_edit');
        Route::post('update/{id}',[\App\Http\Controllers\NewsController::class,'update'])->name('user_news_update');
        Route::get('delete/{id}',[\App\Http\Controllers\NewsController::class,'destroy'])->name('user_news_delete');
        Route::get('show',[\App\Http\Controllers\NewsController::class,'show'])->name('user_news_show');
    });

    #Image Gallery
    Route::prefix('image')->group(function (){
        Route::get('create/{news_id}',[ImageController::class,'create'])->name('user_image_add');
        Route::post('store/{news_id}',[ImageController::class,'store'])->name('user_image_store');
        Route::get('delete/{id}/{news_id}',[ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show',[ImageController::class,'show'])->name('user_image_show');
    });

});
#Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

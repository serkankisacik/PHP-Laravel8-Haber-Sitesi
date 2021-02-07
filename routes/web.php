<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\NewsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/tag', [HomeController::class, 'tag'])->name('tag');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/news/{id}/{slug}', [HomeController::class, 'news'])->name('news');
Route::get('/category/{id}/{slug}', [HomeController::class, 'category'])->name('category');
Route::post('/getnews',[HomeController::class,'getnews'])->name('getnews');
Route::get('/postlist/{search}', [HomeController::class, 'postlist'])->name('postlist');


Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category',[CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');

    #News
    Route::prefix('news')->group(function (){
        Route::get('/',[NewsController::class,'index'])->name('admin_news');
        Route::get('create',[NewsController::class,'create'])->name('admin_news_add');
        Route::post('store',[NewsController::class,'store'])->name('admin_news_store');
        Route::get('edit/{id}',[NewsController::class,'edit'])->name('admin_news_edit');
        Route::post('update/{id}',[NewsController::class,'update'])->name('admin_news_update');
        Route::get('delete/{id}',[NewsController::class,'destroy'])->name('admin_news_delete');
        Route::get('show',[NewsController::class,'show'])->name('admin_news_show');
    });

    #Messages
    Route::prefix('message')->group(function (){
        Route::get('/',[MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
    });

    #Image Gallerys
    Route::prefix('image')->group(function (){
        Route::get('create/{news_id}',[ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{news_id}',[ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{news_id}',[ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[ImageController::class,'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');
});
Route::middleware('auth')->prefix('account')->namespace('account')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');

});

//Route::middleware('auth')->prefix('user')->namespace('account')->group(function (){
//    Route::get('/profile',[UserController::class,'index'])->name('userprofile');
//}); Video 22-33
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

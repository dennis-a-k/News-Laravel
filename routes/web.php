<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

/**
 * Сайт новостей
 */
Route::group([
    'namespace' => '\App\Http\Controllers\Site',
    'as' => 'news::',
], function () {
    Route::get('/', 'NewsController@index')
        ->name('index');
    Route::get('/category/{category}', 'NewsController@list')
        ->name('list')
        ->where('category', '[a-z_]+');
    Route::get('/news/{id}', 'NewsController@newsCard')
        ->name('card')
        ->where('id', '[0-9]+');
    Route::get('/parser', 'ParserController@index')
        ->name('parser');
    Route::get('/dashboard', function () {
            return view('site.pages.dashboard');
        })->middleware(['auth'])->name('dashboard');
});

/**
 * Админка новостей
 */
Route::group([
    'prefix' => '/admin/news',
    'namespace' => '\App\Http\Controllers\Admin',
    'as' => 'admin::news::',
    'middleware' => ['auth', 'role:admin'],
], function () {
    Route::match(['get', 'post'], '/', 'NewsController@index')
        ->name('index');
    Route::post('/create', 'NewsController@create')
        ->name('create');
    Route::post('/update', 'NewsController@update')
        ->name('update');
    Route::post('/delete', 'NewsController@delete')
        ->name('delete');
});

/**
 * Админка пользователя
 */
Route::group([
    'prefix' => '/admin/user',
    'namespace' => '\App\Http\Controllers\Admin',
    'as' => 'admin::user::',
    'middleware' => ['auth'],
], function () {
    Route::match(['get', 'post'], '/', 'UserController@index')
        ->name('index');
    Route::post('/update', 'UserController@update')
        ->name('update');
});

/**
 * Админка пользователей
 */
Route::group([
    'prefix' => '/admin/users',
    'namespace' => '\App\Http\Controllers\Admin',
    'as' => 'admin::users::',
    'middleware' => ['auth', 'role:admin'],
], function () {
    Route::match(['get', 'post'], '/', 'UsersController@index')
        ->name('index');
    Route::post('/update', 'UsersController@update')
        ->name('update');
});

/**
 * Локализация
 */
Route::get('/locale/{lang}', [LocaleController::class, 'index'])
    ->name('locale')
    ->where('lang', '[a-z]+');


require __DIR__.'/auth.php';

<?php

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

Route::get('/', function () {  //route is een class
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/todo/save', 'ToDoController@save')->name('todo.save');

Route::post('/todo/update', 'ToDoController@update')->name('todo.update');

Route::post('/todo/filter', 'ToDoController@filter')->name('todo.filter');

Route::post('/todo/search', 'ToDoController@search')->name('todo.search');

Route::post('/todo/all', 'ToDoController@all')->name('todo.all');

Route::post('/todo/delete', 'ToDoController@delete')->name('todo.delete');

Route::post('/color/update', 'ColorController@update')->name('color.update');

Route::group(['prefix' =>  'admin', 'middleware' => 'admin'], function(){
    Route::get('edit', 'EditController@index')->name('edit');
    Route::post('edit/update', 'EditController@update')->name('edit.update');
});

// Route::prefix('/products')->group
//     Route::get('/', ['uses' => 'PhotoController@index']);
//     Route::get('/', )


?>
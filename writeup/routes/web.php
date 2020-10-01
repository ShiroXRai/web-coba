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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/profil', function () {
//     $nama = 'Raihan';
//     return view('profil',['nama' => $nama]);
// });

// Route::get('/artikel', function () {
//     return view('artikel');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });

Route::resource('logins','LoginsController');
Route::post('/postlogin','LoginsController@postlogin');
Route::post('/signup','LoginsController@store');
Route::get('/','PagesController@home');
Route::get('/kontak','PagesController@kontak');
Route::post('/','PagesController@store');
Route::get('/logout','LoginsController@logout');

Route::get('/belumlogin/{artikel}', 'ArtikelsController@muncul');

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::resource('artikels','ArtikelsController');
    // Route::get('/students','StudentsController@index');
    // Route::get('/students/create', 'StudentsController@create');
    // Route::get('/students/{student}', 'StudentsController@show');
    // Route::post('/students','StudentsController@store');
    // Route::delete('/studennts/{student}','StudentsController@destroy');
    // Route::get('/students/{student}/edit','StudentsController@edit');
    // Route::patch('/students/{student}','StudentsController@update');
    Route::resource('students','StudentsController');
});

Route::group(['middleware' => ['auth','checkRole:admin,siswa']],function(){    
    Route::get('/profils/{user}','ProfilsController@show');
    Route::get('/profils/{user}/edit','ProfilsController@edit');  
    Route::patch('/profils/{user}','ProfilsController@update');                
    Route::get('/students','StudentsController@index');
    Route::get('/students/{student}', 'StudentsController@show');
    Route::get('/artikels','ArtikelsController@index');
    Route::get('/artikels/{artikel}', 'ArtikelsController@show');
});


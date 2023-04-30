<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//menampilkan langsung hasil perhitunga
Route::get('/hitung', function() {
    return 9*9;
});

//menampilkan langsung string
Route::get('/string', function() {
    return "apa saja";
});

//Penulisan Route Basic Multi Argument
Route::get('/kontak', function() {
    return view('kontak',['name'=>'Ahmad Ali Hasan','phone'=>'08770032.....']);
});

//Penulisan Route Basic Multi Parameter
// Route::get('/kontak', function() {
//     return view('kontak');
// });

//Penulisan Route Simple
// Route::view('/kontak','kontak');

//Penulisan Route Simple dengan Argument
// Route::view('/kontak', 'kontak',['name'=>'Ahmad Ali Hasan']);
// CASESENSTITIVE -> name pada route menjadi variabel $name pada view

//Penulisan Route Simple dengan Multi Argument
// Route::view('/kontak', 'kontak',['name'=>'Ahmad Ali Hasan','phone'=>'087700325770']);

//REDIRECT Route::redirect('/here','/there');
//Route::redirect('/kontak','/string');

//Route dengan Parameter Dinamis
Route::get('/produk/{id}', function($id) {
    return 'ini adalah produk dengan id '.$id;
});

//Route ke View dengan Parameter Dinamis
Route::get('/produk/{id}', function ($id) {
 return view('produk.detail',['id'=>$id]);
});

//PREFIX Routing
// Route::get('admin/profil', function(){
//     return 'profil admin';
// });
// Route::get('admin/tentang', function(){
//     return 'tentang admin';
// });
// Route::get('admin/kontak', function(){
//     return 'kontak admin';
// });
//MENJADI
Route::prefix('admin')->group(function(){
    Route::get('profil', function(){
        return 'profil admin';
    });
    Route::get('tentang', function(){
        return 'tentang admin';
    });
    Route::get('kontak', function(){
        return 'kontak admin';
    });
});
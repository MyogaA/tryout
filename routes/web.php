<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    AdminController,
    AddController,
    TkategoriController,
};


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
// Route::get('/addartikel', function () {
//     return view('addartikel');
// });
Route::get('/add', function () {
    return view('add');
});
Route::get('/login',[AuthController::class, "viewLogin"])->name('viewLogin');

Route::post('/login',[AuthController::class, "login"])->name('login');
Route::get('/add',[AddController::class, "index"])->name('add');
Route::get('/dataartikel',[AdminController::class, "index"])->name('dataartikel');
Route::post('/savedata',[AddController::class, "store"])->name('savedata');
Route::get('/deleteartikel/{id}',[AddController::class, "destroy"])->name('deleteartikel');
Route::get('/deletekategori/{id}',[TkategoriController::class, "destroy"])->name('deletekategori');
Route::get('/editdata/{id}',[AddController::class, "show"])->name('editdata');
Route::post('/updatedata/{id}',[AddController::class, "update"])->name('updatedata');
Route::get('/editkategori/{id}',[TkategoriController::class, "show"])->name('editkategori');
Route::post('/updatekategori/{id}',[TkategoriController::class, "update"])->name('updatekategori');

Route::get('/tambahKategori', function(){
    return view('tambahKategori');
});
Route::get('/datakategori',[TkategoriController::class, "index"])->name('datakategori');
Route::post('/savekategori',[TkategoriController::class, "store"])->name('savekategori');


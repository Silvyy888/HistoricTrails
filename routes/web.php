<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('statusLogin')->group(function() {
});
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
// Route::get('/register', [UserController::class, 'register']);
Route::post('/auth', [UserController::class,'auth']);

Route::get('/startLogin', [UserController::class, 'startlogin']);
Route::get('/home', [UserController::class, 'home']);
// Route::get('/beranda', [UserController::class, 'beranda']);
Route::get('/account', [UserController::class, 'account']);
Route::get('/logoutberanda', [UserController::class, 'logberanda']);

Route::get('/education', [UserController::class, 'education']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/object', [UserController::class, 'object']);
Route::get('/shop', [UserController::class, 'shop']);
Route::get('/shopbook', [UserController::class, 'shopbook']);
Route::get('/backmajalah', [UserController::class, 'back']);
Route::get('/account', [UserController::class, 'account']);

//--- KETERANGAN UNTUK SETIAP KONTEN
Route::get('/huruf', [UserController::class, 'huruf']);
Route::get('/lawangsewu', [UserController::class, 'lawangsewu']);
Route::get('/prambanan', [UserController::class, 'prambanan']);
Route::get('/smphpmda', [UserController::class, 'smphpmda']);
Route::get('/manene', [UserController::class, 'manene']);

//--- DASHBORD ---
Route::get('/dshbrd', [UserController::class, 'dshbrd']);
Route::get('/dshbrd', [ArticleController::class, 'show']);
Route::get('/artikel/create', [ArticleController::class, 'create']);
Route::post('/artikel/create', [ArticleController::class, 'add']);
Route::post('/search',[ArticleController::class,'search']);
Route::get('/artikel/edit/{id}', [ArticleController::class, 'edit']);
Route::post('/artikel/edit/{id}',[ArticleController::class,'update']);
Route::get('/artikel/delete/{id}',[ArticleController::class,'delete']);

Route::get('/dsbrdset', [UserController::class, 'dshbrdsetting']);
Route::get('/page', [UserController::class, 'page']);
Route::get('/dsbrdlog', [UserController::class, 'beranda']);
Route::get('/about/admin', [UserController::class, 'aboutadmin']);
// Route::get('/shop/admin', [UserController::class, 'shopadmin']);
Route::get('/beranda/admin', [UserController::class, 'berandaadmin']);


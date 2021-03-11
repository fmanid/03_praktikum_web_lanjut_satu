<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();


/* 1 */
Route::get('/home', function () {
    return view('praktikum1.home',['link' => 'https://www.educastudio.com/']);
});


/* 2 */
Route::prefix('category')->group(function () {
    Route::get('/{id?}', [ProductController::class,'products']);
   });

/* 3 */
Route::get('/news/{id?}', function ($id = null) {
    if ($id){
    return view('praktikum1.news',['link' => $id]);

    } else{
    return view('praktikum1.news1',['link' => 'https://www.educastudio.com/news']);
    }
    }
   );

   /* 4 */
   Route::prefix('program')->group(function () {
    Route::get('/{id?}', [ProgramController::class,'program']);
   });

   /* 5 */
   Route::get('/about-us',[AboutController::class, 'aboutview']);

   /* 6 */
   Route::resource('contact-us', ContactController::class);

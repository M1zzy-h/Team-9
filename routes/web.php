<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
  //  return view('welcome');
//});

route::get('/',[HomeController::class,'index']);

route::get('/account',[HomeController::class,'account']);
route::get('/cart',[HomeController::class,'cart']);
route::get('/contact',[HomeController::class,'contact']);
route::get('/about',[HomeController::class,'about']);
route::get('/shop',[HomeController::class,'shop']);
route::get('/indie',[HomeController::class,'indie']);
route::get('/hiphop',[HomeController::class,'hiphop']);
route::get('/jazz',[HomeController::class,'jazz']);
route::get('/pop',[HomeController::class,'pop']);
route::get('/r&b',[HomeController::class,'randb']);
route::get('/rock',[HomeController::class,'rock']);

Route::get('/product/{id}', [HomeController::class, 'showProduct']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('redirect',[HomeController::class,'redirect']);

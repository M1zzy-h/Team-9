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

route::get('/product',[HomeController::class,'product']);
route::get('/product2',[HomeController::class,'product2']);
route::get('/product3',[HomeController::class,'product3']);
route::get('/product4',[HomeController::class,'product4']);
route::get('/product5',[HomeController::class,'product5']);
route::get('/product6',[HomeController::class,'product6']);
route::get('/product7',[HomeController::class,'product7']);
route::get('/product8',[HomeController::class,'product8']);
route::get('/product9',[HomeController::class,'product9']);
route::get('/product10',[HomeController::class,'product10']);
route::get('/product11',[HomeController::class,'product11']);
route::get('/product12',[HomeController::class,'product12']);
route::get('/product13',[HomeController::class,'product13']);
route::get('/product14',[HomeController::class,'product14']);
route::get('/product15',[HomeController::class,'product15']);
route::get('/product16',[HomeController::class,'product16']);
route::get('/product17',[HomeController::class,'product17']);
route::get('/product18',[HomeController::class,'product18']);
route::get('/product19',[HomeController::class,'product19']);
route::get('/product20',[HomeController::class,'product20']);
route::get('/product21',[HomeController::class,'product21']);






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

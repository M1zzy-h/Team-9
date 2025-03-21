<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//Route::get('/', function () {
  //  return view('welcome');
//});

route::get('/',[HomeController::class,'index'])->name('index');

route::get('/account',[HomeController::class,'account']);
route::get('/cart',[HomeController::class,'cart']);
route::get('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/about',[HomeController::class,'about']);
route::get('/shop',[HomeController::class,'shop'])->name('shop');
route::get('/indie',[HomeController::class,'indie']);
route::get('/hiphop',[HomeController::class,'hiphop']);
route::get('/jazz',[HomeController::class,'jazz']);
route::get('/pop',[HomeController::class,'pop']);
route::get('/r&b',[HomeController::class,'randb']);
route::get('/rock',[HomeController::class,'rock']);

Route::get('/product/{id}', [HomeController::class, 'showProduct'])->name('product.show');

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

Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/product/add', [AdminController::class, 'addProduct'])->name('admin.product.add');
Route::delete('/product/delete/{id}', [AdminController::class, 'deleteProduct'])->name('admin.product.delete');

route::get('checkout',[HomeController::class,'checkout']);

Route::post('checkout', [HomeController::class,'stripePost'])->name('stripe.post');
Route::get('/viewOrders', [AdminController::class, 'viewOrders']);

Route::get('/orders', [AdminController::class, 'viewOrders'])->name('view_orders');
Route::get('/orders/{order}/edit', [AdminController::class, 'editOrder'])->name('admin.orders.edit');
Route::put('/orders/{order}', [AdminController::class, 'updateOrder'])->name('admin.orders.update');
Route::delete('/orders/{order}', [AdminController::class, 'deleteOrder'])->name('admin.orders.destroy');
Route::patch('/orders/{order}/payment-status', [AdminController::class, 'updatePaymentStatus'])->name('admin.update.payment.status');
Route::patch('/orders/{order}/delivery-status', [AdminController::class, 'updateDeliveryStatus'])->name('admin.update.delivery.status');
Route::get('/past-orders', [AdminController::class, 'pastOrders'])->name('admin.past.orders');
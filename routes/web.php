<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

//==================  Frontend
    Route::get('/', [FrontendController::class, 'homePage'])->name('home');
    Route::get('/product-details/{id}', [FrontendController::class, 'productDetails'])->name('pd');

    Route::middleware('auth')->group(function(){
        Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
        Route::post('/save', [AjaxController::class, 'dataSave'])->name('save');
        Route::post('/delete', [AjaxController::class, 'dataDelete'])->name('delete');
        Route::post('/checkout',[FrontendController::class,"checkout"])->name('checkout');
        Route::get('/checkout/{id}',[FrontendController::class,"checkoutView"])->name('checkout.view');
        Route::post('/billing-info',[FrontendController::class, "billingInfo"])->name('billing.info');
        Route::post('/delivery-method-submit',[FrontendController::class, ""])->name('paymentway.store');
        Route::get('/delivery/{id}',[FrontendController::class,"delivery"])->name('delivery');
    });
//==================  End Frontend

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->name('admin.')->middleware(['auth', 'uc'])->group(function () {
    //common url
    Route::get('/delete/{model}/{id}', [DeleteController::class,'delete'])->name('delete');
    Route::post('/fetch', [AjaxController::class,'fetch'])->name('fetch');

    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [BackendController::class, 'profile'])->name('profile');
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('product', ProductController::class);

});

require __DIR__ . '/auth.php';

<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::group(['prefix' => 'account'], function () {

    Route::get('/profile', function () {
        return "Profile";
    });

    Route::get('/signup', function () {
        return view('singup');
    });
    Route::post('/signup', [
        SiteController::class,
        'newUser'
    ]);

    Route::get('/login', function () {
        return "Login";
    });

    Route::get('/logout', function () {
        return "LogOut";
    });


});

Route::get('/', [SiteController::class, 'Home']);
Route::get('/account', [SiteController::class, 'Account']);
Route::get('/form/{name}/{number}', [SiteController::class, 'Data']);

Route::get('/product', function () {

    $product = Product::all();
    echo "<pre>";
    print_r($product->toArray());
});
<?php

use App\Models\NewUser;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::group(['prefix' => 'account'], function () {

    Route::get('/profile', function () {
        return "Profile";
    });

    Route::get('/signup', function () {
        return view('signup');
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

Route::get('/data', function () {
    // Retrieve the user data from the session
    $name = session('name');
    $mobile = session('mobile');
    $email = session('email');

    // Pass the user data to the view
    return view('data', compact('name', 'mobile', 'email'));
})->name('data');

Route::get('/all-user', function () {
    $allUser = NewUser::all();
    $data = compact('allUser');
    return view('all-user')->with($data);
});
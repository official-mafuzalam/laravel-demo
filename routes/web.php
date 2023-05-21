<?php

use App\Models\NewUser;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentHandler;
use Illuminate\Http\Request;

// Route Start

Route::get('/', [StudentHandler::class, 'Home']);


Route::group(['prefix' => 'administration'], function () {


    Route::get('/student_add', [StudentHandler::class, 'StudentAdd'])->name('student.add_page');



});



























Route::get('/account', [SiteController::class, 'Account']);

Route::group(['prefix' => 'account'], function () {

    Route::get('/signup', [SiteController::class, 'signup']);

    Route::post('/signup', [SiteController::class, 'newUser']);

    Route::get('/delete/{id}', [SiteController::class, 'delete'])->name('user.delete');

    Route::get('/update/{id}', [SiteController::class, 'update'])->name('user.update');

    Route::post('/edit/{id}', [SiteController::class, 'edit'])->name('user.edit');

    Route::get('/restore/{id}', [SiteController::class, 'restore'])->name('user.restore');

    Route::get('/trash-user/{id}', [SiteController::class, 'trash'])->name('user.trash');

    Route::get('/trash-user', [SiteController::class, 'allTrash'])->name('user.allTrash');

    Route::get('/profile', function () {
        return "Profile";
    });

    Route::get('/login', function () {
        return "Login";
    });

    Route::get('/logout', function () {
        return "LogOut";
    });


});


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



Route::get('/get-season', function () {
    $season = session()->all();
    p($season);
});

Route::get('/set-season', function (Request $request) {
    $request->session()->put('user_name', 'WsCube Tech');
    $request->session()->put('user_id', '123');

    return redirect('get-season');
});
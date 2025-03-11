<?php

use Illuminate\Support\Facades\Route;

// using an string in the callback() place the laravel wait a controler method. 
Route::get('/',[\App\Http\Controllers\HomeController::class,'home'])->name('site.home');

Route::get('/about-us',[\App\Http\Controllers\AboutUsController::class,'aboutus'])->name('site.aboutus');
 
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'contact'])->name('site.contact');
 
Route::get('/login', function () {
   return 'Login';
})->name('site.login');

Route::prefix('market')->group(function() {
    Route::get('/users', function () {
        return 'Users';
    })->name('market.users');
    Route::get('/clients', function () {
        return 'Clients';
    })->name('market.clients');
    Route::get('/suppliers', function () {
        return 'Suppliers';
    })->name('market.suppliers');
    Route::get('/products', function () {
        return 'Products';
    })->name('market.products');
});


// Route::get('/contact/{name}/{category_id}', function ($name, $category_id) {
//    return $name . ' - ' . $category_id;
   
// });

// Route::get('/about-us/{subject}/{message?}', function ($subject, $message = 'No message') {
//     return $subject . ' - ' . $message;
// })->where(['subject' => '[0-9]+', 'message' => '[A-Za-z]+']);
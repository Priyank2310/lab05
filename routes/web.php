<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Hello From RCOEM";
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::view('/contact', 'contact', [
    "name" => "Priyank"
]);

// Route::get('/person/{name}', function($name){
//     return "The name is $name.";
// });

Route::get('/person/{name?}', function(?string $name = 'Rohit Sharma'){
    return "The name is $name.";
})->name('person');



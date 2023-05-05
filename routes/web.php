<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('index',["myName" => "hein htet zan","age" => 28]);
})->name("page.home");

// Route::get('/about-us',fn()=> view("about")->with("a","aaa"))->name('page.about');
// Route::get('/contact-us',fn()=> view('contact'));
// Route::view('/contact-us',"contact",["phone" => "09999955858"])->name('page.contact');


// Route::view('/profile', 'admin.profile');
Route::get('/profile', function () {
    return view('admin.profile');
});


Route::get('/contact-us',[ContactController::class,"contact"])->name('page.contact');
Route::get('/about-us',[AboutController::class,'about'])->name('page.about');
Route::get('/run',[TestController::class,'run'])->name('run');
Route::get('/area/{width}/{height}',[TestController::class,'area']);
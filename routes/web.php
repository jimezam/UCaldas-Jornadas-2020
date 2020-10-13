<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

# Example #1: Counter Classic (views)
//////////////////////////////////////////////////////////////////////////

use Illuminate\Http\Request;

// Show the page with the counter
Route::get('/counter-classic/{count?}', function ($count = 0) {
    return view('counter-classic', compact('count'));
});

// Process the click over one of the buttons (increase/decrease counter)
Route::post('/counter-classic', function (Request $request) {
    $count = $request->input('count');    
    
    $mode = $request->has('increase') ? 1 : -1;

    $count += $mode;

    return redirect(url('counter-classic', [$count]));
});

//////////////////////////////////////////////////////////////////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

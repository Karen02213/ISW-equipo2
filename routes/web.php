<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexControlador;

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

//Route::get('/',  function(){
 //   return view('welcome');
// });

Route::prefix('/')->group(
    function () {
        Route::get('',              [IndexControlador::class, 'index'] );
});

Route::prefix('new/')->group(
    function () {
        Route::get('user',              [IndexControlador::class, 'NewUserForm']);
    });

    Route::prefix('password')->group(
    function () {
        Route::get('',              [IndexControlador::class, 'PasswordForm']);
    }
);
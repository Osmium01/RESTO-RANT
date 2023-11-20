<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;


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

Route::group(["middleware" => "web"], function(){
    Route::get('/', [RestoController::class, 'index']);

    Route::get('/list', [RestoController::class, 'list']);
    Route::post('/add', [RestoController::class, 'add']);
    Route::post('edit', [RestoController::class, 'update']);
    Route::get('/delete/{id}', [RestoController::class, 'delete']);
    Route::get('/edit/{id}', [RestoController::class, 'edit']);
    
    Route::view('register', 'register');
    Route::view('login', 'login');
    
    Route::post('register', [RestoController::class, 'register']);
    Route::post('login', [RestoController::class, 'login']);
    
    Route::view('add', 'add');
    // Route::get('logout', 'logout');
    Route::get('logout', function(){
        if(Session::has('user')){
            Session::pull('user');
        }
        return redirect('login');
    });
});



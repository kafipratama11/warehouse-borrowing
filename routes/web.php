<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StatusController;

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
    return view('welcome');
});
Route::get('/admin/borrowing', function () {
    return view('admin-dashboard.borrowing');
});
Route::get('/admin/borrowers', function () {
    return view('admin-dashboard.borrower');
});
// Route::get('/admin/products', function () {
//     return view('admin-dashboard.products');
// });

Route::get('/items', [ItemController::class, 'index']);
Route::get('/admin/overview', [StatusController::class, 'dashboard']);
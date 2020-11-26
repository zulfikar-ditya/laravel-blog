<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController as UserAdmin;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    
    // admin routing
    Route::group(['middleware' => ['role:superuser|staff']], function() {
        // base route
        Route::view('admin/', 'admin.index');

        // user
        Route::get('admin/user/list/', [UserAdmin::class, 'index'])->name('admin-user-list');

        // superuser page
        Route::group(['middleware' => ['role:superuser']], function() {

        });

        // staff page
        Route::group(['middleware' => ['role:staff']], function() {

        });
    });

    // reporter route
    Route::group(['middleware' => ['role:reporter']], function() {

    });

});


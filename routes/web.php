<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController as UserAdmin;
use App\Http\Controllers\admin\CategoryController as CategoryAdmin;

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
        Route::view('admin/', 'admin.index')->name('adminIndex');

        // user
        Route::get('admin/user/list/', [UserAdmin::class, 'index'])->name('admin-user-list');
        Route::get('admin/user/add/', [UserAdmin::class, 'create'])->name('admin-user-add');
        Route::post('admin/user/add/', [UserAdmin::class, 'create'])->name('admin-user-add');
        Route::get('admin/user/change/{id}/', [UserAdmin::class, 'edit'])->name('admin-user-edit');
        Route::post('admin/user/change/{id}/', [UserAdmin::class, 'update'])->name('admin-user-edit');

        // category
        // Route::get('admin/category/', [CategoryAdmin::class, ''])->name('admin-category-');
        Route::get('admin/category/list/', [CategoryAdmin::class, 'index'])->name('admin-category-list');
        Route::get('admin/category/add', [CategoryAdmin::class, 'create'])->name('admin-category-add');
        Route::post('admin/category/add', [CategoryAdmin::class, 'store'])->name('admin-category-add');
        Route::get('admin/category/change/{id}/', [CategoryAdmin::class, 'edit'])->name('admin-category-edit');
        Route::post('admin/category/change/{id}/', [CategoryAdmin::class, 'update'])->name('admin-category-edit');

        // superuser page
        Route::group(['middleware' => ['role:superuser']], function() {
            // user
            Route::get('admin/user/delete/{id}/', [UserAdmin::class, 'destroyConfirm'])->name('admin-user-delete');
            Route::post('admin/user/delete/{id}/', [UserAdmin::class, 'destroy'])->name('admin-user-delete');
        });

        // staff page
        Route::group(['middleware' => ['role:staff']], function() {

        });
    });

    // reporter route
    Route::group(['middleware' => ['role:reporter']], function() {

    });

});


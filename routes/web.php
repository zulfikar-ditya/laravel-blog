<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController as UserAdmin;
use App\Http\Controllers\admin\CategoryController as CategoryAdmin;
use App\Http\COntrollers\admin\BlogController as BlogAdmin;

use App\Http\Controllers\reporter\BlogController as BlogReporter;

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

        // articles/ post
        Route::get('admin/article/my-article', [BlogAdmin::class, 'MyPost'])->name('admin-blog-my-post');
        Route::get('admin/article/list/', [BlogAdmin::class, 'index'])->name('admin-blog-list');
        Route::get('admin/article/add/', [BlogAdmin::class, 'create'])->name('admin-blog-add');
        Route::post('admin/article/add/', [BlogAdmin::class, 'store'])->name('admin-blog-add');
        Route::get('admin/article/edit/{id}', [BlogAdmin::class, 'edit'])->name('admin-blog-edit');
        Route::post('admin/article/edit/{id}', [BlogAdmin::class, 'update'])->name('admin-blog-edit');
        Route::get('admin/article/hide/{id}', [BlogAdmin::class, 'ConfirmHidePost'])->name('admin-blog-hide');
        Route::post('admin/article/hide/{id}', [BlogAdmin::class, 'HidePost'])->name('admin-blog-hide');
        Route::get('admin/article/unhide/{id}', [BlogAdmin::class, 'ComfirmUnHidePost'])->name('admin-blog-unhide');
        Route::post('admin/article/unhide/{id}', [BlogAdmin::class, 'UnHidePost'])->name('admin-blog-unhide');

        // superuser page
        Route::group(['middleware' => ['role:superuser']], function() {
            // user
            Route::get('admin/user/delete/{id}/', [UserAdmin::class, 'destroyConfirm'])->name('admin-user-delete');
            Route::post('admin/user/delete/{id}/', [UserAdmin::class, 'destroy'])->name('admin-user-delete');
            Route::get('admin/article/delete/{id}', [BlogAdmin::class, 'ConfirmDestroy'])->name('admin-blog-delete');
            Route::post('admin/article/delete/{id}', [BlogAdmin::class, 'destroy'])->name('admin-blog-delete');    
        });

        // staff page
        Route::group(['middleware' => ['role:staff']], function() {

        });
    });

    // reporter route
    Route::group(['middleware' => ['role:reporter']], function() {
        Route::get('reporter/', [BlogReporter::class, 'base'])->name('ReporterIndex');
        Route::get('reporter/list', [BlogReporter::class, 'index'])->name('reporter-list-post');
        Route::get('reporter/add', [BlogReporter::class, 'create'])->name('reporter-add-post');
        Route::post('reporter/add', [BlogReporter::class, 'store'])->name('reporter-add-post');
        Route::get('reporter/edit/{id}', [BlogReporter::class, 'edit'])->name('reporter-edit-post');
        Route::post('reporter/edit/{id}', [BlogReporter::class, 'update'])->name('reporter-edit-post');
        Route::get('reporter/delete/{id}', [BlogReporter::class, 'destroyConfirm'])->name('reporter-delete-post');
        Route::post('reporter/delete/{id}', [BlogReporter::class, 'destroy'])->name('reporter-delete-post');
    });

});


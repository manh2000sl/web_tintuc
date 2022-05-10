<?php


use App\Http\Controllers\backend\DasboardController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\DasboardAuthorController;
use App\Http\Controllers\backend\AdminRoleController;
use App\Http\Controllers\backend\AdminUserController;
use App\Http\Controllers\frontend\ajaxLoginController;
use App\Http\Controllers\frontend\HomePageController;
use App\Models\Topic;
use App\Models\Post;
use App\Http\Controllers;

use Illuminate\Support\Facades\Route;
//trang chính admin

Route::prefix('admin')->group(function (){
    Route::get('/', [DasboardController::class, 'index'])->name('admin.home')->middleware('can:add_topic');
    Route::get('/api', [DasboardController::class, 'api'])->name('admin.api');
    Route::get('create', [DasboardController::class, 'create'])->name('admin.create');
    Route::post('store', [DasboardController::class, 'store'])->name('admin.store');
    Route::get('edit/{id}', [DasboardController::class, 'edit'])->name('admin.edit');
    Route::put('update/{id}', [DasboardController::class, 'update'])->name('admin.update');
    Route::delete('destroy/{id}', [DasboardController::class, 'destroy'])->name('admin.destroy');
    Route::post('comment', [DasboardController::class, 'comment'])->name('admin.comment');

});
//danh mục
Route::prefix('admin/topic')->group(function () {
    Route::get('/', [TopicController::class, 'index'])->name('admin.topic')->middleware('can:add_topic');
    Route::get('create', [TopicController::class, 'create'])->name('admin.topic.create')->middleware('can:add_topic');
    Route::post('store', [TopicController::class, 'store'])->name('admin.topic.store');
    Route::get('edit/{id}', [TopicController::class, 'edit'])->name('admin.topic.edit')->middleware('can:edit_topic');
    Route::put('update/{id}', [TopicController::class, 'update'])->name('admin.topic.update')->middleware('can:edit_topic');
    Route::delete('destroy/{id}', [TopicController::class, 'destroy'])->name('admin.topic.destroy')->middleware('can:delete_topic');
});
Auth::routes();
Route::prefix('admin/user')->group(function (){
    Route::get('/', [AdminUserController::class, 'index'])->name('admin.user');
    Route::get('create', [AdminUserController::class, 'create'])->name('admin.user.create')->middleware('can:add_user');
    Route::post('store', [AdminUserController::class, 'store'])->name('admin.user.store');
    Route::get('edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit')->middleware('can:edit_user');
    Route::put('update/{id}', [AdminUserController::class, 'update'])->name('admin.user.update')->middleware('can:edit_user');
    Route::delete('destroy/{id}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy')->middleware('can:delete_user');

});
Route::prefix('admin/role')->group(function (){
    Route::get('/', [AdminRoleController::class, 'index'])->name('admin.role')->middleware('can:add_user');
    Route::get('create', [AdminRoleController::class, 'create'])->name('admin.role.create');
    Route::post('store', [AdminRoleController::class, 'store']);
    Route::get('edit/{id}', [AdminRoleController::class, 'edit'])->name('admin.role.edit');
    Route::put('update/{id}', [AdminRoleController::class, 'update'])->name('admin.role.update');
    Route::delete('destroy/{id}', [AdminRoleController::class, 'destroy'])->name('admin.role.destroy');
});
// tác giả
Route::prefix('/')->group(function (){
    Route::get('index/{id?}', [DasboardAuthorController::class, 'index'])->name('admin.author.home')->middleware('can:is_author');
    Route::get('create', [DasboardAuthorController::class, 'create'])->name('admin.author.create');
    Route::post('store', [DasboardAuthorController::class, 'store'])->name('admin.author.store');
    Route::get('edit/{id}', [DasboardAuthorController::class, 'edit'])->name('admin.author.edit');
    Route::put('update/{id}', [DasboardAuthorController::class, 'update'])->name('admin.author.update');
//    Route::delete('destroy/{id}', [DasboardAuthorController::class, 'destroy'])->name('admin.author.destroy');
});
//frontend
Route::prefix('/')->group(function (){
    Route::get('', [HomePageController::class, 'index'])->name('index.home');
    Route::get('topic/{slug}', [HomePageController::class, 'show'])->name('index.show');
    Route::get('detail/{slug}', [HomePageController::class, 'detail'])->name('index.detail');

});
////////////////////////////////////////////
Route::prefix('ajax')->group(function (){
//    Route::get('login', [ajaxLoginController::class, 'login'])->name('ajax.login');
    Route::post('comment/{post}', [ajaxLoginController::class, 'comment'])->name('ajax.comment');
//    Route::post('login', [ajaxLoginController::class, 'checklogin'])->name('ajax.checkslogin');


});
//

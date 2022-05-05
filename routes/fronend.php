<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomePageController;

Route::prefix('home')->group(function (){
    Route::get('', [HomePageController::class, 'index'])->name('index.home');
});

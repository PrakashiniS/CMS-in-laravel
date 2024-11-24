<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/',[userController::class,'admin']);
//faculty
Route::get('/faculty',[userController::class,'facul'])->name('faculty');
Route::post('raise/com',[userController::class,'raise']);
//infra
Route::get('/infra',[userController::class,'pending']) ->name('infra');
Route::get('pend/pends/{id}',[userController::class,'faculty']);
Route::get('prob/des/{id}',[userController::class,'problem']);
Route::get('imgs/image/{id}',[userController::class,'image']);
Route::post('appr/apps/{id}',[userController::class,'approve']);
Route::post('reje/rejs/{id}',[userController::class,'reject']);
Route::get('fed/feed/{id}',[userController::class,'feedback']);
Route::get('aff/after/{id}',[userController::class,'afimage']);
?>
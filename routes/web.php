<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () { 
    echo "Hello API!"; 
});
Route::get('/test',[TestController::class, 'testAction']);
Route::get('/form',[TestController::class, 'viewForm']);
Route::post('/submit',[TestController::class, 'submitForm']);

Route::get('/closure-numbers', function () {
    return app(ExampleController::class)->listNumbers();
});

Route::get('/controller-numbers', [ExampleController::class, 'listNumbers']);
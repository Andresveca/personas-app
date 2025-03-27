<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/comunas',[ComunaController::class,'index'] );
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route:: get ('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post ('/comunas', [ComunaController :: class, 'store'])->name('comunas.store');
Route::delete ('/comunas{comuna}', [ComunaController :: class, 'destroy'])->name('comunas.destroy');
Route::put('/comuna/{comuna}',[ComunaController :: class,'update'])->name('comunas.update');
Route::get('/comuna/{comuna}/edit',[ComunaController::class,'edit'])->name('comunas.edit');     

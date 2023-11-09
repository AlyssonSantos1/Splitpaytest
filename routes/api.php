<?php

use App\Http\Controllers\PrateleiraController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [PrateleiraController::class, 'getAll']);
Route::get('/cadastro-item', [PrateleiraController::class, 'create']);
Route::post('/cadastro-item', [PrateleiraController::class, 'create'])->name('cadastro-item');
Route::get('/editar-item/{id}', [PrateleiraController::class, 'edit']);
Route::put('/atualizar-item',[PrateleiraController::class, 'update'])->name('atualizar-item');
Route::get('/excluir-item/{id}',[PrateleiraController::class, 'destroy']);
Route::get('/mostrar-item/{id}', [PrateleiraController::class, 'show']);




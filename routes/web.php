<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TarefasController;

Route::view('/', 'welcome');

Route::prefix('/tarefas')->group(function(){

    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list'); //listagem de tarefas

    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add'); //tela de adição
    Route::post('add', [TarefasController::class, 'addAction']); //ação de adição

    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit'); //tela de edição
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //ação de edição

    Route::get('delete/{id}', [TarefasController::class, 'del'])->name('tarefas.del'); //ação de deletar

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done'); //marcar como resolvido/não

});

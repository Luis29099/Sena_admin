<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\OrmController;
use App\Models\computer;
use Illuminate\Support\Facades\Route;

// Route::get('ormconsultas',[OrmController::class,'consultas']);
// Route::get('computer', [ComputerController::class, 'index'])->name('computer.index');
// Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');


// Lista de computadoras
Route::get('computer', [ComputerController::class, 'index'])->name('computer.index');


Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');


Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');


Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');


Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');


Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');


Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');


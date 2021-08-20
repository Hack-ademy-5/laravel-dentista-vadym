<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;


//Todas estas rutas tienen su segunda mitad en el "PrimerController" para no ensuciar este archivo

// Ruta   |               Funcion                   |    Vista         |
Route::get('/', [PrimerController::class,'homepage'])->name('homepage');

Route::get('/pagina de contacto', [PrimerController::class,'paginadecontacto'])->name('paginaDeContacto');

Route::get('/quienes somos', [PrimerController::class,'quienessomos'])->name('quienesSomos');

Route::get('/about us', [PrimerController::class,'aboutus'])->name('aboutUs');

Route::get('/donde estamos', [PrimerController::class,'dondeestamos'])->name('dondeEstamos');
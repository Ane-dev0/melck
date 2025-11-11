<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio']);

require __DIR__.'/settings.php';

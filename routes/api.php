<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\DespesaController;

Route::apiResource('despesas', DespesaController::class);

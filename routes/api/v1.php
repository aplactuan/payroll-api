<?php

use App\Http\Controllers\Departments\StoreDepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return "It's morbin time";
});

Route::post('/departments', StoreDepartmentController::class)->name('department.store');

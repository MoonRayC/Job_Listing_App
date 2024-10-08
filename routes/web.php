<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOfferController;

Route::get('/', function () {
    return view('home');
});

Route::get('/job', [JobOfferController::class, 'index'])->name('job.index');

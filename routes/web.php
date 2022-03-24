<?php

use Illuminate\Support\Facades\Route;
use Helaplus\Evoting\Http\Controllers\EvotingController;
//
Route::post('/home', [EvotingController::class, 'home'])->name('evoting.app');
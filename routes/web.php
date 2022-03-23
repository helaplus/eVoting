<?php

use Illuminate\Support\Facades\Route;
use Helaplus\Ussd\Http\Controllers\EvotingController;
//
Route::post('/home', [EvotingController::class, 'home'])->name('evoting.app');
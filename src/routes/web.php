<?php

use Illuminate\Support\Facades\Route;
use Trado006\Ducky\Controllers\DuckyController;

Route::get('trado006/ducky', function(Trado006\Ducky\Ducky $ducky) {
    return $ducky->justDoIt();
});

Route::get('trado006/ducky-controllers', DuckyController::class);

<?php

use App\Models\Service;

Route::get('/services', function () {
    return Service::all();
});
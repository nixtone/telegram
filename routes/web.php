<?php

use Illuminate\Support\Facades\Route;
use DefStudio\Telegraph\Facades\Telegraph;

Route::get('/', function () {
    $send = Telegraph::message('this is great')->send();
    dd($send);

});

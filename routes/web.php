<?php

use Illuminate\Support\Facades\Route;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Models\TelegraphChat;

Route::get('/', function () {
    $chat = TelegraphChat::all();
    $chat->html("<strong>Hello!</strong>\n\nI'm here!")->send();
    $send = Telegraph::message('this is great')->send();
    dd($send);

});

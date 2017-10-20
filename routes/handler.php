<?php

use Illuminate\Http\Request;

Route::post('/loginInvoke', App\Http\Handlers\Login::class);

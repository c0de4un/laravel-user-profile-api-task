<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registration', ['\App\Http\Controllers\API\Users\RegisterAction', 'index']);
Route::get('/profile', ['\App\Http\Controllers\API\Users\GetProfileAction', 'index']);

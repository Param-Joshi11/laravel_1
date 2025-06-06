<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use HasApiTokens, HasFactory, Notifiable;

// API Routes

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

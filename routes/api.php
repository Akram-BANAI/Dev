<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Middleware for authenticated API requests
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Define the /posts route
Route::get('/postss', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post One'
            ]
        ]
    ]);
});

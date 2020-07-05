<?php

use App\User;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return User::all();
});

Route::middleware('auth:api')->get('/users/{name}', function ($name) {
    return User::where('name', $name)->first();
});

Route::middleware('auth:api')->post('/users', function (Request $request) {
    $data = $request->all();

    User::forceCreate($data);
});

// Route::middleware('auth:api')->get('/search', function (Request $request) {
Route::get('search', function (Request $request) {
    $q = $request->query('q');

    
    // $result = Http::get("http://api.tvmaze.com/search/shows?q={$q}")->json();
    $result = Http::get("http://api.tvmaze.com/search/shows?q={$q}");

    dd($result->clientError());

    dd($result->throw()->json());

    die();

    $getShow = function($show) use ($q){   
        return (stripos($show['show']['name'], $q) !== false);
    };

    $filtered = array_filter($result, $getShow);

    return $filtered;
});
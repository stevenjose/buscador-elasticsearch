<?php

use Illuminate\Support\Facades\Route;
use Elasticsearch\ClientBuilder;
use App\Models\ElasticsearchRepository;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [SearchController::class,'search']);

Route::get('/debug-sentry', function () {
    throw new Exception('Mi tercer error en Sentry!');
});

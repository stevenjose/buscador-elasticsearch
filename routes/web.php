<?php

use Illuminate\Support\Facades\Route;
use Elasticsearch\ClientBuilder;
use App\Models\ElasticsearchRepository;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [SearchController::class,'search']);

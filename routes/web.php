<?php

use Illuminate\Support\Facades\Route;
use Elasticsearch\ClientBuilder;
use App\Models\ElasticsearchRepository;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', 'App\Http\Controllers\SearchController@search');

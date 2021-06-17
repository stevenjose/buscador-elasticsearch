<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Elasticsearch\ClientBuilder;
use Elasticsearch\Client;

use App\Observers\ElasticsearchObserver;
use App\Models\Article;

use App\Models\ElasticsearchRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Client::class, function($app){
          return ClientBuilder::create()->setHosts(['localhost'])->build();
        });

        $this->app->bind(ElasticsearchRepository::class, function($app){
          return new ElasticsearchRepository($app->make(Client::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Article::observe(ElasticsearchObserver::class);
    }
}

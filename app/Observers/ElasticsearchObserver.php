<?php

namespace App\Observers;

use Elasticsearch\Client;

class ElasticsearchObserver
{
    //
    private $client;

    public function __construct(Client $client){
      $this->client = $client;
    }

    public function saved($model)
    {

      $this->client->index([
        'index'=>$model->getTable(),
        'type'=>$model->getTable(),
        'id'=>$model->id,
        'body'=> $model->toArray(),
      ]);


    }
}

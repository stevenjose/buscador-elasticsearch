<?php

namespace App\Models;
use Elasticsearch\Client;

class ElasticsearchRepository
{
  private $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function search($q = '')
  {
    $article = new Article();

    if(!$q){
      $items = $this->client->search([
        'index' => $article->getTable(),
        'size' => 100,
        'body'=>[]
      ]);
    }else{
      $items = $this->client->search([
        'index' => $article->getTable(),
        'size' => 100,
        'body'=>[
          'query' => [
            "multi_match" => [
              "query" => $q,
              "fields" => ['title', 'tags']
            ]
          ]
        ]
      ]);
    }

    return $this->mapToModel($items['hits']['hits']);
  }

  public function mapToModel($articles){
    return array_map(function($item){
      $article = new Article();
      $article->id = $item["_id"];
      $article->title = $item["_source"]["title"];
      $article->tags = $item["_source"]["tags"];
      return $article;

    }, $articles);
  }
}

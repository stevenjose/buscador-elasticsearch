<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'tags'];

    public function toArray(){
      return [
        'title'=> $this->title,
        'content' => $this->content,
        'tags' => $this->tags,
      ];
    }
}

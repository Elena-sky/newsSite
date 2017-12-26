<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImages extends Model
{
    protected $table = 'news_photos';
    protected $fillable = ['id', 'filename', 'news_id', 'created_at', 'updated_at'];

}

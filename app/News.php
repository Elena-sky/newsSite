<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id', 'name', 'category_id', 'description', 'displaing', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Categories', 'category_id');
    }

    public function newsImg()
    {
        return $this->hasMany('App\NewsImages', 'news_id');
    }
}

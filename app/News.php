<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id', 'name', 'category_id', 'description', 'displaing', 'view_count', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Categories', 'category_id');
    }

    public function newsImg()
    {
        return $this->hasMany('App\NewsImages', 'news_id');
    }

    public static function limitNewsSlide()
    {
        $data = News::query()->orderBy('id', 'desc')->take(5)->get();
        return $data;
        dd($data);
    }

    public function categoryName()
    {
        $category = Categories::find($this->category_id);
        $name = (!empty($category)) ? $category->name : 'none';
        return $name;
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'news_tag', 'news_id');

    }

}

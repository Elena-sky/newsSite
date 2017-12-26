<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'status'];


    public function news()
    {
        return $this->hasMany('App\News', 'category_id');
    }

    public static function limitNews($id)
    {
        $data = News::query()->where('category_id', $id)->orderBy('id','desc')->take(5)->get();
        return $data;
    }

    public static function getCategories()
    {
        $category = [];
        $categories = self::all();
        foreach ($categories as $item) {
            $category[$item->id] = $item->name;
        }
        return $category;
    }
}

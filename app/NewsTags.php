<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTags extends Model
{
    protected $table = 'news_tag';
    protected $fillable = ['news_id', 'tag_id', 'created_at', 'updated_at'];
    protected $primaryKey = 'news_id';

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function news()
    {
        return $this->belongsToMany('App\News')->withTimestamps();
    }

    public static function getNewsByTag($id)
    {
        $data = NewsTags::query()
            ->where('tag_id', $id)
            ->pluck('news_id');
        $newsList = News::find($data);
        return $newsList;
    }
}

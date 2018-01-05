<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];

    public function news()
    {
        return $this->belongsToMany('App\News', 'news_tag', 'id');
    }

    public static function getTagList($idList = false)
    {
        $preparedList = [];
        $tags = $idList ? self::find($idList) : self::all();

        foreach ($tags as $tag) {
            $preparedList[$tag['id']] =  $tag['name'];

        }
        return $preparedList;
    }

}

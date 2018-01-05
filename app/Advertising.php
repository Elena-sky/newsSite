<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    protected $table = 'advertising';
    protected $fillable = ['id', 'name', 'prise', 'company', 'leftadvertising'];

}

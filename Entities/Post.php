<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    protected function getAuthorAttribute()
    {
        return 'Diego Vissini';
    }
}

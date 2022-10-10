<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'article_tags');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'articles_id', 'id');
    }
}

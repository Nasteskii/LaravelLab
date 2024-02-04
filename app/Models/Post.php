<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'author',
        'title',
        'body',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'on_post');
    }
}

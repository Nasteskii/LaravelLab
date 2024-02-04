<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'on_post',
        'from_user',
        'body',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user');
    }
}

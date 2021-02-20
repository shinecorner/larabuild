<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['brief'];
    
    protected $connection = 'testing';

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}

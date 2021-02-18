<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Comment extends Model
{
    protected $fillable = ['brief'];
    use HasFactory;
//    public function post(){
//        return $this->belongsTo(Post::class);
//    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $connection = 'testing';

    public function user()
    {
        return $this->belongsTo(User::class);
//        return $this->belongsTo(User::class)->withDefault([
//            'name' => 'guest',
//        ]);

//        return $this->belongsTo(User::class)->withDefault(function ($user, $post) {
//            $user->name = 'guest';
//            $user->designation = 'xyz';
//        });
    }
    
    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

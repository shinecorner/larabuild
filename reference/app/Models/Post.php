<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the post that owns the comment.
     */
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
//    public function resolveRouteBinding($value, $field = null)
//    {
//        return $this->where('id', $value)->where('active', 1)->firstOrFail();
//    }
    protected $touches = ['user'];

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

//    public function comments(){
//        return $this->hasMany(Comment::class);
//    }
    /**
     * Get the post's image.
     */
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
    public function activityFeeds()
    {
        return $this->morphMany(ActivityFeed::class, 'parentable');
    }
}

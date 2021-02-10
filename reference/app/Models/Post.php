<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class)->first();
//        return $this->belongsTo(User::class)->withDefault([
//            'name' => 'guest',
//        ]);

//        return $this->belongsTo(User::class)->withDefault(function ($user, $post) {
//            $user->name = 'guest';
//            $user->designation = 'xyz';
//        });
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

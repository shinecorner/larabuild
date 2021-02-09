<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $guarded = [];
    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class)->first();
    }
}

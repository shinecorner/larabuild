<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class Destination extends Model
{
    use HasFactory;
    /**
     * Get the comments for the blog post.
     */
    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}

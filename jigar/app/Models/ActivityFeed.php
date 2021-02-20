<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityFeed extends Model
{
    use HasFactory;

    protected $connection = 'testing';

    public function parentable()
    {
        return $this->morphTo();
    }
}

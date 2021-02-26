<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

//     public function resolveRouteBinding($value, $field = null)
//    {
//        return $this->where('id', $value)->where('is_sold', 1)->firstOrFail();
//    }
}

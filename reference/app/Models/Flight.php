<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $dateFormat = 'U';
    protected $attributes = [
        'active' => 1,
        'type' => 'international'
    ];
//    protected $fillable = [
//        'name',
//        'price',
//        'destination_id'
//    ];
    protected $guarded = ['number'];
    public function getCancelledAttribute()
    {
        if(!$this->departed || $this->type == 'international'){
            return true;
        }
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeDeparted($query)
    {
        return $query->where('departed', 1);
    }
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}

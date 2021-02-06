<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    // protected $dateFormat = 'U';
    protected $attributes = [
        'active' => 1,
        'type' => 'international'
    ];
    public function getCancelledAttribute()
    {
        if(!$this->departed || $this->type == 'international'){
            return true;
        }    
    }
}

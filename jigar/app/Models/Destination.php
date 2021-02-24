<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class Destination extends Model
{
    protected $connection = 'testing';
    use HasFactory;
    public function flights()
    {
        
        return $this->hasMany(Flight::class);
    }
}

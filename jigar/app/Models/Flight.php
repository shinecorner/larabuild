<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Flight extends Model
{
    use HasFactory;

    // protected $table = 'my_flights';

    // protected $primarykey = 'flight_id';


    // on-incrementing or a non-numeric primary key
    // public $incrementing = false;

    // you should define a protected $keyType

    // protected $keyType = 'string';

    // Eloquent will automatically set these column's values when models are created or updated
    // public $timestamps = false;


    // customize the format of your model's timestamps,
    // protected $dateFormat = 'U';

    // customize the names of the columns used
    // const crated_at =  'creation_date';
    // const updated_at = 'updated_date';

    // protected $connection = 'testing';


    // default values for some of your model's attributes, you may define an $attributes property on your model:
    // protected $attributes = [
    //     'delayed' => false
    // ];

    protected $connection = 'testing';

    // protected $fillable = ['name'];

    // use Illuminate\Database\Eloquent\SoftDeletes;
    // use SoftDeletes;


    // use App\Models\Address;


    // namespace App\Scopes;

    // use Illuminate\Database\Eloquent\Builder;
    // use Illuminate\Database\Eloquent\Model;
    // use Illuminate\Database\Eloquent\Scope;

    // use App\Scopes\AncientScope;
    // use Illuminate\Database\Eloquent\Model;


    // protected $fillable = ['name->enabled','email->enabled'];

    // or
    // protected $guarded  = ['name'];



}

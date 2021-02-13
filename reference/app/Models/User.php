<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
//    protected $with = ['phone:id,user_id,number'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function phone()
    {
        return $this->hasOne(Phone::class);
//        return $this->hasOne(Phone::class, 'user_id','id');

    }
    public function roles()
    {
//        return $this->belongsToMany(Role::class)->as('subscription')->withTimestamps();
        return $this->belongsToMany(Role::class)->withTimestamps();

//        return $this->belongsToMany(Role::class)
//            ->wherePivot('approved', 1)
//            ->wherePivot('active', 1);
//        ->wherePivotIn('priority', [1, 2]);
    }
    /**
     * Get the user's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

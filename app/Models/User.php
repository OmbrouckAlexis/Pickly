<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


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
        'overview',
        'avatar',
    ];

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

    public function songs() {
        // SELECT * FROM songs WHERE user_id = $this->id
        return $this->hasMany("App\Models\Song", "user_id");
    }

    public function ILikeThem() {
        return $this->belongsToMany("App\Models\User", "connection", "from_id", "to_id");
        // SEELECT * FROM users JOIN connection ON to_id=users.id WHERE from_id=$this->id
    }

    public function TheyLikeMe() {
        return $this->belongsToMany("App\Models\User", "connection", "to_id", "from_id");
        // SEELECT * FROM users JOIN connection ON from_id=users.id WHERE to_id=$this->id
    }

    public function ILike() {
        return $this->belongsToMany("App\Models\Song", "like", "user_id", "song_id");
    }
}
?>
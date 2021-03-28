<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs';
    public function user() {
        // SELECT * FROM users WHERE users.id=$this->user_id
        return $this->belongsTo("App\Models\User", "user_id");
    }

    public function LikeImg() {
        return $this->belongsToMany("App\Models\Song", "like", "img_id", "user_id");
        // SEELECT * FROM users JOIN connection ON to_id=users.id WHERE from_id=$this->id
    }
}

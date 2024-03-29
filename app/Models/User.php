<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'email',
        'password',
        'role_id',
        'image',
    ]; // model_anchor
     
    protected $table = 'users';

    function role() {
        return $this->belongsTo(Role::class);
    }

    function conversations() {
        return $this->hasMany(Conversation::class);
    }
    public function teacher() {
        return $this->hasOne(Teacher::class);
    }
    public function posts() {
        return $this->hasMany(Post::class);
    }
    public function cours() {
        return $this->belongsToMany(Cour::class);
    }
}

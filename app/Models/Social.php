<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'facebook',
        'twitter',
        'dribble',
        'insta',
        'skype',
        'linkedink',
        'teacher_id',
    ]; // model_anchor
     
    protected $table = 'socials';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'lieu',
        'date',
        'start',
        'titre',
        'description',
        'teacher_id',
    ]; // model_anchor
     
    protected $table = 'evenements';

    public function teacher(){

        return $this->belongsTo(Teacher::class);
        
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'prof_id',
        'prix',
        'titre',
        'description',
        'slide_id',
        'start',
        'temps',
        'niveau',
        'discipline',
        'date',
    ]; // model_anchor
     
    protected $table = 'cours';
}

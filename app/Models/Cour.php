<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'teacher_id',
        'prix',
        'titre',
        'description',
        'slide_id',
        'start',
        'temps',
        'niveau',
        'discipline',
        'date',
        'categorie_id',
    ]; // model_anchor
     
    protected $table = 'cours';

    public function slide(){
        return $this->belongsTo(Slide::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function categories(){

        return $this->belongsToMany(Categorie::class);
        
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

}

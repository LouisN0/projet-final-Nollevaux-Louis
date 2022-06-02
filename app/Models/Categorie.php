<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
     
    protected $fillable = [
    ]; // model_anchor
     
    protected $table = 'categories';
     
   
    
    public function posts()
    {
        $this->belongsToMany(Post::class);
    }
    public function cours(){
        $this->belongsToMany(Cour::class);
    }
}

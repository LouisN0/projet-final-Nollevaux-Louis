<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
    ]; // model_anchor
     
    protected $table = 'categories';
    
    public function posts()
    {
        $this->belongsToMany(Post::class);
    }
}

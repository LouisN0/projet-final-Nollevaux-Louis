<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
    ]; // model_anchor
     
    protected $table = 'tags';

    public function posts()
    {
        $this->belongsToMany(Post::class);
    }

}

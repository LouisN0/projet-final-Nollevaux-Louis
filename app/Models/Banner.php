<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'titre',
        'motsCle',
        'description',
        'btn',
        'first',
    ]; // model_anchor
     
    protected $table = 'banners';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
    ]; // model_anchor
     
    protected $table = 'slides';

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'from',
        'to',
        'contenu',
        'status',
        'date',
    ]; // model_anchor
     
    protected $table = 'demandes';
}

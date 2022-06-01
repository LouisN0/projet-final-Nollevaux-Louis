<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'adress',
        'email',
        'phone',
        'map',
    ]; // model_anchor
     
    protected $table = 'contacts';
}

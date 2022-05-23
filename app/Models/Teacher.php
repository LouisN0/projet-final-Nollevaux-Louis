<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
     
    protected $fillable = [

        'photo',
        'nom',
        'discipline',
        'description',
        'biographie',
        'telephone',
        'mail',
        
       
    ]; // model_anchor
     
    protected $table = 'teachers';

    public function social()
    {
        return $this->hasOne(Social::class);
    
    }

    
}

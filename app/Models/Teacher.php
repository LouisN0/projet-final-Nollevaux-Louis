<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
     
    protected $fillable = [

        'user_id',
        'photo',
        'nom',
        'discipline',
        'description',
        'biographie',
        'telephone',
        'mail',
        
       
    ]; // model_anchor
     
    protected $table = 'teachers';

    
    public function cours()
    {
        return $this->hasMany(Cour::class);
    
    }
    public function events()
    {
        return $this->hasMany(Evenement::class);
    
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    
    }


    
}

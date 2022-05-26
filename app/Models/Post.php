<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'titre',
        'texte',
        'date',
    ]; // model_anchor
     
    protected $table = 'posts';

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories(){

        return $this->belongsToMany(Categorie::class);
        
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

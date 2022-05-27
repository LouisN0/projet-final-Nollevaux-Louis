<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'from_id',
        'to_id',
        'created_at',
        'read_at',
    ]; // model_anchor
    protected $table = 'conversations';

    public $timestamps = false;

    protected $dates = ['created_at', 'read_at'];

    public function from ()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
}

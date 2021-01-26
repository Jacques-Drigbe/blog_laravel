<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // $Fillable est vrameint important
    protected $fillable = [
        'title',
        'content',
        'image', 
        // users id va contenir la clé étrangère 
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

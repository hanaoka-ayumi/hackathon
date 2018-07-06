<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
     protected $fillable = [
        'chat','group_id','user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public function group()
    {
        return $this->belongsTo(Group::class);
    }
}

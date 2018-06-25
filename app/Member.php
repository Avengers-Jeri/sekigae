<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_name', 'team_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

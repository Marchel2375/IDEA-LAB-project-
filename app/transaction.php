<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function products(){
        return $this->belongsToMany(product::class)->withPivot('count');
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}

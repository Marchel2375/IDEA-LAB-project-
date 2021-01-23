<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function productType(){

        return $this->belongsTo(productType::class);
    }

    public function user(){
        return $this->belongsToMany(User::class)->withPivot('count');
    }

    public function transaction(){
        return $this->belongsToMany(transaction::class)->withPivot('count');
    }
}

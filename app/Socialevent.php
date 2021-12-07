<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialevent extends Model
{
    protected $fillable = ['user_id','name'];
    protected $table = 'socialevents';

    public function user(){
        return $this->belongsTo('App\User');
    }
}

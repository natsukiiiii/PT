<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['user_id','name'];
    protected $table = 'publications';

    public function user(){
        return $this->belongsTo('App\User');
    }
}

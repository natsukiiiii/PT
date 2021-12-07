<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['user_id','name'];
    protected $table = 'educations';

    public function user(){
        return $this->belongsTo('App\User');
    }
}

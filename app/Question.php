<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'text', 'user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function questionsComments()
    {
        return $this->hasMany('App\QuestionsComment');
    }
}

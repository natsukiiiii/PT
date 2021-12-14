<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsComment extends Model
{
    protected $fillable = ['text'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function questions()
    {
        return $this->belongsTo('App\Question');
    }
}

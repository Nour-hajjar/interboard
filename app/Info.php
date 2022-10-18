<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
        protected  $fillable = ['user_id', 'en_name','ar_name','name','name_a','en_course','ar_course','code','date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

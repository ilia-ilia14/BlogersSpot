<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * Model for the post
 */
class Post extends Model
{
    //
    public $timestamps = false;
    public function user() {
        return $this->belongsTo('App\User');
    }
}

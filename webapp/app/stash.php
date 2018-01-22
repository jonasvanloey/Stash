<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stash extends Model
{
    //a stash can only belong to one user
    public function user() {
        return $this->belongsTo(User::class);
    }
}

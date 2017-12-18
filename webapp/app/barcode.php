<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barcode extends Model
{

    protected $fillable = [
        'barcode'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }


    //
}

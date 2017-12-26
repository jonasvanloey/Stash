<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barcode extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'barcode','description'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }


    protected $dates = ['deleted_at'];
    //
}

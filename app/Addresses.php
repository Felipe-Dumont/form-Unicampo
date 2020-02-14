<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $table = 'addresses';

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}

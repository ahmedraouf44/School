<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    public $primaryKey='cid';

    public function students()
    {
        return $this->hasMany('App\students','c_id');
    }
}

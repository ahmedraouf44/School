<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    public $primaryKey='sid';

    public function classes()
    {
        return $this->belongsTo('App\classes','c_id','cid');
    }
    public function buses(){
        return $this->belongsTo('App\buses','b_id','bid');
    }
}

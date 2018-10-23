<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfilpf extends Model
{
    return $this->belongsTo('App\User');

    public function getTitle()
    {
    	return $this->title
    }
}

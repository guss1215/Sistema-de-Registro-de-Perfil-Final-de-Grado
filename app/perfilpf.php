<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfilpf extends Model
{
    
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    /*return $this->belongsTo('App\User');

    public function getTitle()
    {
    	return $this->title
    }*/
}

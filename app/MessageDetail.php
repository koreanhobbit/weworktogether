<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageDetail extends Model
{
    public function contact()
    {
    	return $this->belongsTo('App\ContactMessage', 'id');
    }
}

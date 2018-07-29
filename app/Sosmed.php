<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    public function SocialMediaType() 
    {
    	return $this->belongsTo('App\SocialMediaType', 'social_media_type_id');
    }
}

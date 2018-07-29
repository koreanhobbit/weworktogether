<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    public function themesetting()
    {
        return $this->belongsTo('App\ThemeSetting');
    }

    public function images()
    {
    	return $this->morphToMany('App\Image', 'imageable')->withPivot('option','info')->withTimestamps();
    }

    public function contacts() 
    {
        return $this->hasMany('App\Websosmed', 'setting_id');
    }

    public function logoImage()
    {
        return $this->images()->wherePivot('option', 4)->first();
    }

    public function iconImage()
    {
        return $this->images()->wherePivot('option', 5)->first();
    }

    public function partners()
    {
        return $this->hasMany('App\Partner', 'setting_id');
    }
}

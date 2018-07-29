<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThemeSetting extends Model
{
    protected $table = 'themesettings'; 

	public function setting()
	{
		return $this->hasOne('App\Setting');
	}

     public function images()
    {
    	return $this->morphToMany('App\Image', 'imageable')->withPivot('option','info')->withTimestamps();
    }

    public function menus()
    {
        return $this->hasMany('App\Menu', 'themesetting_id');
    }
}

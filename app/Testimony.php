<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonies';

    protected $guarded = [];

    public static function addNewTestimony($request)
    {
    	return static::create([
    		'testimony' => $request->testimony,
    		'name' => $request->name,
            'company' => $request->company, 
    	]);
    }

    public function images() {
        return $this->morphToMany('App\Image', 'imageable')->withPivot('option', 'info')->withTimestamps();
    }
}

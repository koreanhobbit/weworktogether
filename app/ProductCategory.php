<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];

    public static function addNewProductCategory($request) 
    {
    	return static::create([
    		'name' => $request->name,
    		'slug' => $request->slug,
    	]);
    }
}

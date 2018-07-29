<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
	protected $guarded = [];

    public function messagedetail()
    {
        return $this->hasOne('App\MessageDetail', 'contact_message_id');
    }

    public static function addNewContact($request)
    {
    	return static::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'subject' => $request->subject,
    		'message' => $request->message,
    	]);
    }
}

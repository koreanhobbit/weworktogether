<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [ 
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $contact = ContactMessage::addNewContact($request);

        //Make the contact detail
        $detail = new \App\MessageDetail;
        $detail->contact_message_id = $contact->id;
        $detail->save();

        //mail to superadmin
        //
        Mail::to('astrowebstudio@gmail.com')->queue(new \App\Mail\ContactNotification($contact));

        return redirect()->route('mainpage.index')->with('successmessage', 'Thanks your message was successfully sent. We will contact you as soon as possible.');
    }
}

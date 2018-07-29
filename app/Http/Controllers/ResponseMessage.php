<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseMessage extends Controller
{
    public function update(Request $request, $contact)
    {
    	//validation
        $this->validate($request, [
            'recipient' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = \App\ContactMessage::find($contact);

        //update the detail
        $contact->messagedetail->status = 1;
        $contact->messagedetail->response = $request->message;
        $detail = $contact->messagedetail->save();

        //send the email 
        \Mail::to($request->recipient)->queue(new \App\Mail\ResponseMessage($detail));

        return redirect()->route('manage.index')->with('flashmessage', 'Your response was sent!');
    }
}

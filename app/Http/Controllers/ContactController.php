<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessContactMail;
use App\Mail\contactMail;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function propertyInquiry(Request $request, $property_id ){
        $request-> validate([
            'name'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'message'=> 'required|max:255',
        ]);

        $contact = new contact();
        $contact->name= $request->name;
        $contact->phone= $request->phone;
        $contact->email= $request->email;
        $contact->message= $request->message .' This has been message sent via '. route('single_property', $property_id). 'website.' ;
        $contact->save();

        //Send user and admin message via queue
        ProcessContactMail::dispatch($contact);
        //Mail::send(new contactMail($contact));
        
        return redirect(route('single_property', $property_id))->with('message', 'Your message has been sent');

       

    }

}

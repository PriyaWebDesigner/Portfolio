<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function contactMessageStore (Request $request)
    {
        $contactForm = new ContactForm();

        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        
        $contactForm->save();
        return redirect()->back();
    }

    public function contactMessageShow ()
    {
        $contactForms = ContactForm::get();
        return view ('backend.message.list',compact('contactForms'));
    }

    public function contactMessageDelete ($id)
    {
        $contactForm = ContactForm::find($id);
        $contactForm->delete();
        return redirect()->back();
        
    }
}

<?php

namespace Shawwa\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shawwa\Contact\Mail\ContactMailable;
use Shawwa\Contact\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::query()->create([
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message,
        ]);

        return redirect(route('contact'));
    }

}

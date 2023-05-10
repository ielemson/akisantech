<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactUsController extends Controller
{
/**
 * Create a new controller instance.
 *
 * @return void
 */
// public function __construct()
// {
//     $this->middleware('auth');
// }

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
public function index()
{
$title = "Contact Us";
return view('contactUs')->with('title' , $title);

}

 // Store Contact Form data
 public function ContactUsForm(Request $request) {

    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        // 'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'subject'=>'required',
        'message' => 'required'
     ]);

    //  Store data in database
    Contact::create($request->all());

    // 
    return back()->with('success', 'We have received your message and would get back to you shortly.');
}

}

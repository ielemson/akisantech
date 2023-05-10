<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Consultation;

class WelcomeController extends Controller
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

    /**php 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
    //rediects the login page to the dashboard
        
    $title = "Home";
    return view('home')->with('title' , $title);
    }

    public function AppointmentForm(Request $request){
    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'inquiry' => 'required'
     ]);

    //  Store data in database
    Appointment::create($request->all());

    // 
    return back()->with('success', 'We have received your appointment and would get back to you shortly.');
    }

    // public function ConsultationForm(Request $request){
    //     // Form validation
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //         'inquiry' => 'required'
    //      ]);
    
    //     //  Store data in database
    //     Consultation::create($request->all());
    
    //     // 
    //     return back()->with('success', 'We have received your appointment and would get back to you shortly.');
    // }
}

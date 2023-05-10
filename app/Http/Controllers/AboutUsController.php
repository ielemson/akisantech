<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
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
$title = "About Us";
return view('aboutUs')->with('title' , $title);

}

public function whyChooseUs(){
    $title = "Why Choose Us";
    return view('whyChooseUs')->with('title',$title);
}

public function leaderShip(){
    $title = "Leadership";
    return view('leadership')->with('title',$title);
}

public function akisanmiAyomide(){
$title = 'Leadership- Akisanmi Ayomide';
    return view('team.akisanmi-ayomide')->with('title',$title);
}

public function elemsonIfeanyi(){
$title = 'Leadership- Elemson IFeanyi';
    return view('team.elemson-ifeanyi')->with('title',$title);
}

public function mohammedaminAbdi(){
$title = 'Leadership- Mohammedamin Abdi';
    return view('team.mohammedamin-abdi')->with('title',$title);
}

}

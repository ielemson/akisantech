<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[WelcomeController::class,'index'])->name('index');
// Route::get('/', 'WelcomeController@index')->name('index');


Route::post('/',[WelcomeController::class,'AppointmentForm'])->name('appointment.store');
// Route::post('consult', [
//     'uses' => 'WelcomeController@ConsultationForm',
//     'as' => 'consultation.store'
// ]);
// Route::get('/comingsoon', function () {
//     return view('comingSoon');
// });
// Route::get('/', '@index')->name('index');
Route::get('/comingsoon',[ComingSoonController::class,'index'])->name('index');
// Route::get('/about-us', function () {
//     return view('aboutUs');
// });


Route::get('/about-us',[AboutUsController::class,'index'])->name('about_us');
Route::get('/leadership',[AboutUsController::class,'leaderShip'])->name('leadership');
Route::get('/leadership/akisanmi-ayomide',[AboutUsController::class,'akisanmiAyomide'])->name('akisanmi_ayomide');
Route::get('/leadership/mohammedamin-abdi',[AboutUsController::class,'mohammedaminAbdi'])->name('mohammedamin_abdi');
Route::get('/leadership/elemson-ifeanyi',[AboutUsController::class,'elemsonIfeanyi'])->name('elemson_ifeanyi');

Route::get('/why-choose-us',[AboutUsController::class,'whyChooseUs'])->name('why_choose_us');
Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact_us');


// Post form data
Route::post('/contact',[ContactUsController::class,'ContactUsForm'])->name('contact.store');

<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Traits\CaptchaTrait;
use App\ContactUs;
use Notification;
use App\Notifications\ContactFormSubmitted;
use App\User;
use App\Mail\contactMail;
use Mail;
use Carbon\Carbon;

class HomeController extends Controller
{
    use CaptchaTrait;

    public function index()
    {
    	return view('public-views.welcome');
    }
    public function about()
    {
    	return view('public-views.about');
    }
    public function speakers()
    {
    	return view('public-views.speakers');
    }
    public function registration()
    {
    	return view('public-views.registration');
    }
    public function sponsors()
    {
        return view('public-views.sponsors');
    }
    public function agenda()
    {
        return view('public-views.agenda');
    }
    public function exhibit()
    {
        return view('public-views.exhibit');
    }
    public function contact()
    {
    	return view('public-views.contact');
    }

    public function postContact(Request $request)
    {
        $request['captcha'] = $this->captchaCheck();

        $this->validate($request, [
        'full_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message_subject' => 'required',
        'message' => 'required',
        'g-recaptcha-response' => 'required',
        'captcha' => 'required|min:1',
        ],
        [
         'g-recaptcha-response.required' => 'Captcha is required',
         'captcha.min' => 'Wrong captcha, please try again.'
        ]);

        $contactus = ContactUs::insert([
        'full_name'=>$request->full_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'message_subject'=>$request->message_subject,
        'message'=>$request->message,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $user = User::where('is_admin', '=', 1)->first();

        $user->notify(new ContactFormSubmitted("A new contact form has been submitted."));

        //Mail::to($user->email)->send(new ContactUs($contact_us));
        /*Mail::send('emails.contactmail',
               array(
                   'full_name' => $request->get('full_name'),
                   'phone' => $request->get('phone'),
                   'email' => $request->get('email'),
                   'message_subject' => $request->get('message_subject'),
                   'message' => $request->get('message'),
                   'created_at' => Carbon::now()
               ), function($contactmessage) use($request)
           {
               $contactmessage->from($request->email);
               $message->to('nahorr@gmail.com', 'Admin')->subject('Contact Form');
           });
       */

        flash('Your message was sent successfully. We will be contacting you soon!')->success();
      
        return back();  
    }

    public function contactMail()
    {
        return view('public-views.contact');
    }

    public function comingSoon()
    {
        return view('public-views.coming-soon');
    }
}

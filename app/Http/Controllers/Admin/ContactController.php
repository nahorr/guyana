<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;

class ContactController extends Controller
{
    public function contactFormSubmissions()
    {
    	

    	return view('admin.contactform.submissions');
    }

    public function deleteContactFormSubmission(ContactUs $contactus)
    {
    	ContactUs::where('id', $contactus->id)->delete();

    	return back();
    }
}

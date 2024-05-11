<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use App\Models\Brand;
use App\Models\ContactUs;
use App\Models\Setting;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = [
            'contact_us' => ContactUs::first(),
            'brands' =>   Brand::where('status',1)->where('logo','!=',null)->get(),
            'phone' => Setting::where('key', 'contact_no')->first(),
            'email' => Setting::where('key', 'site_email')->first(),
            'address' => Setting::where('key', 'address')->first(),
            'social_twitter' => Setting::where('key', 'social_twitter')->first(),
            'social_facebook' => Setting::where('key', 'social_facebook')->first(),
            'social_linkedin' => Setting::where('key', 'social_linkedin')->first(),
            'social_pinterest' => Setting::where('key', 'social_pinterest')->first(),
            'social_instagram' => Setting::where('key', 'social_instagram')->first(),
        ];

        return view('contact-us',$data);
    }

    public function store(Request $request)
    {

        $contact                =   new ContactUs;
        $contact->name    =   $request->your_name;
        $contact->email    =   $request->your_email;
        $contact->phone      =   $request->your_phone;
        $contact->comment    =   $request->your_text;
        $contact->save();
        // return "adasd";

        // Mail::to('booking@vipalfarental.ae')->send(new MyTestMail($contact));
        

        return view('contact-us',['success' => 'YOUR REQUEST HAS BEEN SUBMITTED SUCCESSFULLY']);
    }
}

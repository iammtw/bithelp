<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use App\Service;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NormalController extends Controller
{
    public function homepage()
    {
        $services = Service::all();
        $setting = Setting::first();
        return view('index', compact('services', 'setting'));
    }
    public function about()
    {
        $setting = Setting::first();
        return view('about', compact('setting'));
    }
    public function contact()
    {
        $setting = Setting::first();
        $services = Service::all();
        return view('contact', compact('services', 'setting'));
    }
    public function insertContact(Request $req)
    {
        $service = $req->service;
        $name = $req->name;
        $email = $req->email;

        $new = new Contact;
        $new->name = $req->name;
        $new->email = $req->email;
        $new->service = $req->service;
        $new->message = $req->message;
        $new->save();

        $commnetForUser = "Your Order for the service " . $service . " has been generated.
        The Staff Member from bithelp.online will contact you shortly. Thanks!";

        $commentForAdmin = "Your Client " . $name . " has order " . $service . " service on bithelp.online,
        Please Contact him as soon as Possible. His/her email is " . $email;

        $adminMail = "naaimsajjad@gmail.com";
        $adminName = "Naaim";

        Mail::to($email)->send(new ContactMail($commnetForUser, $name));
        Mail::to($adminMail)->send(new ContactMail($commentForAdmin, $adminName));

        return redirect()
            ->back()
            ->with('msg', 'Your Order is Successfully Generated! Our Staff Member will Contact you shortly!');
    }
}

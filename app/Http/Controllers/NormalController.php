<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Service;
use App\Setting;
use Illuminate\Http\Request;

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
        $new = new Contact;
        $new->name = $req->name;
        $new->email = $req->email;
        $new->service = $req->service;
        $new->message = $req->message;
        $new->save();
        return redirect()
            ->back()
            ->with('msg', 'Your Order is Successfully Generated! Our Staff Member will Contact you shortly!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Service;
use App\Setting;

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
        return view('about',compact('setting'));
    }
    public function contact()
    {

    }
}

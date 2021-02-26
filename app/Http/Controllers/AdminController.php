<?php

namespace App\Http\Controllers;

use App\Service;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.index');
    }

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('admin.profile', compact('user'));
    }
    public function profileUpdate(Request $req)
    {
        $user = User::find(Auth::id());
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect('admin/profile')->with('msg', 'Profile Changed Successfully.');
    }
    public function changePassword()
    {
        $user = User::find(Auth::id());
        return view('admin.change-password', compact('user'));
    }
    public function changePasswordUpdate(Request $req)
    {
        $user = User::find(Auth::id());

        if (Hash::check($req->currentPassword, $user->password)) {
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('admin/profile')->with('msg', 'Password Changed Successfully.');
        } else {
            return redirect('admin/profile')->with('msg', 'Your Current Password didnt Match.');
        }
    }

    public function addService()
    {
        return view('admin.service.add');
    }
    public function insertService(Request $req)
    {
        $service = new Service;
        $service->title = $req->title;
        $service->extert = $req->extert;
        $service->description = $req->description;
        $service->price = $req->price;
        $service->icon = $req->icon;
        $service->save();

        return redirect('admin/services')->with('msg', 'Successfully Uploaded');
    }
    public function services()
    {
        $services = Service::all();
        return view('admin.service.view', compact('services'));
    }
    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('admin/services')->with('msg', 'Successfully Deleted');
    }

    public function settings()
    {
        $settings = Setting::first();
        return view('admin.settings', compact('settings'));
    }
    public function insertSettings(Request $req)
    {
        $setting = Setting::first();
        if($setting == null){
            $setting = new Setting;
        }
        $setting->title = $req->title;
        $setting->tagline = $req->tagline;
        $setting->aboutus = $req->aboutus;
        $setting->services = $req->services;
        $setting->feedback = $req->feedback;
        $setting->save();

        return redirect('admin/settings')->with('msg', 'Successfully Updated');
    }

}

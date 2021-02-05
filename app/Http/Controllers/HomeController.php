<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }
    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function faq()
    {
        $setting = Setting::first();
        return view('home.faq',['setting'=>$setting]);
    }
    public function tag()
    {
        $setting = Setting::first();
        return view('home.tag',['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $setting = Setting::first();
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        if ($request->file('file')!=null)
        {
            $data->file= Storage::putFile('contact', $request->file('file'));
        }
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir.');

    }
}




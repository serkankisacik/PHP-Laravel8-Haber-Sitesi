<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

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
}




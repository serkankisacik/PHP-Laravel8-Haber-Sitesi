<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
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
        $categorylist = Category::select('title', 'slug', 'id')->get();
        $slider = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(3)->latest()->get();
        $usthaber = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(2)->inRandomOrder()->get();
        $kategoribir = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(4)->where('category_id', '=', 1)->latest()->get();
        $kategoriiki = News::select('id', 'detail', 'title','image','category_id','created_at','user_id', 'slug')->limit(2)->orderByDesc('created_at')->where('category_id', '=', 2)->latest()->get();
        $kategoriuc = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(4)->where('category_id', '=', 3)->latest()->get();
        $kategoridort = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(3)->where('category_id', '=', 4)->latest()->get();
        $kategoribes = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(3)->where('category_id', '=', 5)->latest()->get();
        $sidebarbir = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(5)->latest()->get();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();

        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'categorylist'=>$categorylist,
            'kategoribir'=>$kategoribir,
            'kategoriiki'=>$kategoriiki,
            'kategoriuc'=>$kategoriuc,
            'kategoridort'=>$kategoridort,
            'kategoribes'=>$kategoribes,
            'usthaber'=>$usthaber,
            'sidebarbir'=>$sidebarbir,
            'reviewlist'=>$reviewlist,

            'page'=>'home'
        ];
        return view('home.index',$data);
    }
    public function news($id,$slug)
    {
        $setting = Setting::first();
        $datalist = Image::where('news_id',$id)->get();
        $data = News::find($id);
        $reviews = \App\Models\Review::select('news_id', 'user_id', 'subject','review' )->where('news_id', '=', $id)->get();
        $kategori = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(4)->inRandomOrder()->get();
        $sidebarbir = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(5)->latest()->get();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        $datapaket=[
            'data'=>$data,
            'setting'=>$setting,
            'kategori'=>$kategori,
            'datalist'=>$datalist,
            'reviews'=>$reviews,
            'sidebarbir'=>$sidebarbir,
            'reviewlist'=>$reviewlist,
            'page'=>'home'
        ];
        return view('home.post',$datapaket);
    }
    public function category($id,$slug)
    {
        $setting = Setting::first();
        $datalist = News::where('category_id',$id)->get();
        $data = Category::find($id)->with('children')->get();
        return view('home.category',['data'=>$data, 'datalist'=>$datalist,'setting'=>$setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.about',['setting'=>$setting,'reviewlist'=>$reviewlist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.contact',['setting'=>$setting,'reviewlist'=>$reviewlist]);
    }
    public function references()
    {
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.references',['setting'=>$setting,'reviewlist'=>$reviewlist]);
    }
    public function faq_old()
    {
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.faq_old',['setting'=>$setting,'reviewlist'=>$reviewlist]);
    }
    public function faq(){
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        $datalist= Faq::all()->sortBy('position');
        return view('home.faq',['setting'=>$setting, 'datalist'=>$datalist,'reviewlist'=>$reviewlist]);
    }
    public function tag()
    {
        $setting = Setting::first();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.tag',['setting'=>$setting,'reviewlist'=>$reviewlist]);
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
    public function getnews(Request $request)
    {
        $search=$request->input('search');
        $sidebarbir = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(5)->latest()->get();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        $count = News::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data = News::where('title','like','%'.$search.'%')->first();
            return redirect()->route('news',['id'=>$data->id,'slug'=>$data->slug] );
        }
        else
        {
            return redirect()->route('postlist',['search'=>$search,'sidebar'=>$sidebarbir,'reviewlist'=>$reviewlist]);
        }

        /* old
        $data = News::where('title',$request->input('search'))->first();
        return redirect()->route('news',['id'=>$data->id,'slug'=>$data->slug]);
        */
    }

    public function postlist($search){
        $datalist = News::where('title','like','%'.$search.'%')->get();
        $sidebarbir = News::select('id', 'title','image','category_id','created_at','user_id', 'slug')->limit(5)->latest()->get();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        $setting = Setting::first();
        return view('home.search_post',['search'=>$search,'datalist'=>$datalist,'setting'=>$setting,'data'=>$datalist,'sidebarbir'=>$sidebarbir,'reviewlist'=>$reviewlist]);
    }
    public static function countreview($id){
        return \App\Models\Review::where('news_id',$id)->count();
    }
    public static function avrgreviews($id){
        return \App\Models\Review::where('news_id',$id)->average('rate');
    }
}




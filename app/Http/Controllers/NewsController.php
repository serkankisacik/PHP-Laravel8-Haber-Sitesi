<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $datalist=News::where('user_id',Auth::id())->get();
        //$data=News::with('category')->where('category_id',$category_id)->paginate(5);
        $setting = Setting::first();

        return view('home.user_news',['setting'=>$setting,'datalist'=>$datalist]);
    }
    public function create()
    {
        $setting = Setting::first();
        $datalist = Category::all();
        return view('home.user_news_add',['setting'=>$setting,'datalist'=>$datalist]);
    }
    public function store(Request $request)
    {
        $data = new News;
        $data->category_id=$request->input('category_id');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status='False';
        $data->user_id=Auth::id();
        $data->detail=$request->input('detail');
        $data->image= Storage::putFile('images', $request->file('image'));

        $data->save();
        return redirect()->route('user_news')->with('success','Haber başarı ile eklendi. Yönetici onayı gerekiyor');
    }
    public function show(News $news)
    {
        //
    }
    public function edit(News $news, $id)
    {
        $setting = Setting::first();
        $data = News::find($id);
        $datalist = Category::with('children')->get();
        return view('home.user_news_edit',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist]);
    }
    public function update(Request $request, News $news, $id)
    {
        $data = News::find($id);
        $data->category_id=$request->input('category_id');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status=$request->input('status');
        $data->user_id=Auth::id();
        $data->detail=$request->input('detail');
        if ($request->file('image')!=null)
        {
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('user_news')->with('info', 'Haber güncellendi');
    }
    public function destroy(News $news, $id)
    {
        $data = News::find($id);
        $data->delete();
        return redirect()->route('user_news')->with('warning', 'Haberi sildiniz.');
    }
}

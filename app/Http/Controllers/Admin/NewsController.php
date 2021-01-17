<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $datalist=DB::table('news')->get();
        return view('admin.news',['datalist'=>$datalist]);
    }
    public function create()
    {
        $datalist=DB::table('news')->get()->where('category_id',0);
        return view('admin.news_add',['datalist'=>$datalist]);
    }
    public function store(Request $request)
    {
        $data = new News;
        $data->category_id=$request->input('category_id');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status=$request->input('status');
        $data->user_id=Auth::id();
        $data->detail=$request->input('detail');
        $data->image= Storage::putFile('images', $request->file('image'));

        $data->save();
        return redirect()->route('admin_news');
    }
    public function show(News $news)
    {
        //
    }
    public function edit(News $news, $id)
    {
        $data = News::find($id);
        $datalist = Category::all();
        return view('admin.news_edit',['data'=>$data,'datalist'=>$datalist]);
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

        $data->image= Storage::putFile('images', $request->file('image'));

        $data->save();
        return redirect()->route('admin_news');
    }
    public function destroy(News $news, $id)
    {
        $data = News::find($id);
        $data->delete();
        return redirect()->route('admin_news');
    }
}

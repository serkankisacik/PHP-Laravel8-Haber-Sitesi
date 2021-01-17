<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($news_id)
    {
        $data=News::find($news_id);
        $images = DB::table('images')->where('news_id','=',$news_id)->get();
        return view('admin.image_add',['data'=>$data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $news_id)
    {
        $data = new Image;
        $data->news_id= $news_id;
        $data->title=$request->input('title');
        $data->alt=$request->input('alt');
        $data->image = Storage::putFile('images', $request->file('image'));

        $data->save();
        return redirect()->route('admin_image_add',['news_id'=>$news_id]);
    }
    public function show(Image $image)
    {
        //
    }
    public function edit(Image $image)
    {
        //
    }

    public function update(Request $request, Image $image)
    {
        //
    }

    public function destroy(Image $image, $id, $news_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('admin_image_add',['news_id'=>$news_id]);
    }
}

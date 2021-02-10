<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $datalist = News::all();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.user_profile',['setting'=>$setting,'datalist'=>$datalist,'reviewlist'=>$reviewlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function myreviews(){
        $setting = Setting::first();
        $datalist = Review::where('user_id', '=', Auth::user()->id)->get();
        $reviewlist = \App\Models\Review::select('review', 'user_id', 'news_id')->limit(3)->latest()->get();
        return view('home.user_reviews',['datalist'=>$datalist,'setting'=>$setting,'reviewlist'=>$reviewlist]);
    }
    public function destroymyreivew(Review $review,$id){
        $data = Review::find($id);
        $data->delete();
        return redirect()->back->with('success', 'Yorumunuz silindi');
    }
}

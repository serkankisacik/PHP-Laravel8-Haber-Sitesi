<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Setting::first();
        if ($data===null)
        {
            $data=new Setting();
            $data->title='Serkan Kısacık';
            $data->save();
            $data=Setting::first();
        }

        return view('admin.setting_edit',['data'=>$data]);
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $id=$request->input('id');

        $data = Setting::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->company=$request->input('company');
        $data->address=$request->input('address');
        $data->fax=$request->input('fax');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->twitter=$request->input('twitter');
        $data->instagram=$request->input('instagram');
        $data->youtube=$request->input('youtube');
        $data->aboutus=$request->input('aboutus');
        $data->contact=$request->input('contact');
        $data->references=$request->input('references');
        $data->faq=$request->input('faq');
        $data->tag=$request->input('tag');
        $data->status=$request->input('status');
        if ($request->file('logo')!=null)
        {
            $data->logo= Storage::putFile('logo', $request->file('logo'));
        }

        $data->save();
        return redirect()->route('admin_setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

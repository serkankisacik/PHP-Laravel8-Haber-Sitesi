<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $datalist = Faq::all();
        return view('admin.faq',['datalist'=>$datalist]);
    }

    public function create()
    {
        $datalist = Faq::all();
        return view('admin.faq_add',['datalist'=>$datalist]);
    }

    public function store(Request $request)
    {
        $data = new Faq;
        $data->question=$request->input('question');
        $data->answer=$request->input('answer');
        $data->position=$request->input('position');
        $data->status=$request->input('status');

        $data->save();

        return redirect()->route('admin_faq')->with('success', 'Soru eklendi');
    }
    public function show(Faq $faq)
    {
        //
    }

    public function edit(Faq $faq,$id)
    {
        $data = Faq::find($id);
        return view('admin.faq_edit',['data'=>$data]);
    }
    public function update(Request $request, Faq $faq, $id)
    {
        $data = Faq::find($id);
        $data->question=$request->input('question');
        $data->answer=$request->input('answer');
        $data->position=$request->input('position');
        $data->status=$request->input('status');

        $data->save();

        return redirect()->route('admin_faq')->with('info','Soru güncellendi.');
    }
    public function destroy(Faq $faq,$id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->route('admin_faq')->with('warning','Soru silindi');
    }
}

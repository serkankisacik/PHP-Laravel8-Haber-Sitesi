<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title)
    {
        if($category->parent_id==0)
        {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title= $parent->title . ' >> '. $title;

        return CategoryController::getParentsTree($parent,$title);
    }

    public function index()
    {
        //$datalist=DB::select('select * from categories');
        //$datalist=DB::table('categories')->get();
        $datalist=Category::with('children')->get();
        return view('admin.category',['datalist'=>$datalist]);
    }
    public function add()
    {
        //$datalist=DB::table('categories')->get()->where('parent_id',0);
        $datalist=Category::with('children')->get();
        return view('admin.category_add',['datalist'=>$datalist]);
     }
    public function create(Request $request)
    {
       DB::table('categories')->insert([
           'parent_id'=>$request->input('parent_id'),
           'title'=>$request->input('title'),
           'keywords'=>$request->input('keywords'),
           'description'=>$request->input('description'),
           'slug'=>$request->input('slug')
       ]);
       return redirect()->route('admin_category');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category, $id)
    {
        $data = Category::find($id);
        //$datalist=DB::table('categories')->get()->where('parent_id',0);
        $datalist=Category::with('children')->get();
        return view('admin.category_edit',['data'=>$data,'datalist'=>$datalist]);
    }


    public function update(Request $request, Category $category,$id)
    {
        $data = Category::find($id);
        $data->parent_id=$request->input('parent_id');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status=$request->input('status');

        if ($request->file('image')!=null)
        {
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_category');

    }

    public function destroy(Category $category,$id)
    {
        DB::table('categories')->where('id','=', $id)->delete();
        return redirect()->route('admin_category');
    }
}

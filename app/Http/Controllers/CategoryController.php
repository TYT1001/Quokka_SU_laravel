<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function categories(){
        $data = Category::orderBy('created_at','asc')->get();
        return view('admin.adminCategoryPage',compact('data'));
    }
    public function create(Request $request){
        $this->catValidation($request);
        Category::create(['name'=>$request->name,'created_at'=>Carbon::now()]);
        return back();
    }
    public function delete($id){
        Category::where('id',$id)->delete();
        return back();
    }
    private function categoryValidation($query){
        Validator::make($query,[
            'name'=>'required'
        ])->validate();
    }
    private function catValidation($request){
        Validator::make($request->all(),[
            'name'=>'required'
        ])->validate();
    }

}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login(){
        return view('admin.adminLoginPage');
    }
    public function home(){
        return view('admin.adminHomePage');
    }
    public function posts(){
        $data = post::select('posts.*','categories.name as category_name')->when(request('key'),function($p){
            $key = request('key');
            $p->orWhere('title','like','%'.$key.'%')
            ->orWhere('description','like','%'.$key.'%');
        })
        ->leftJoin('categories','posts.category_id','categories.id')
        ->orderBy('created_at','asc')->paginate(4);
        $allData = post::orderBy('created_at','asc')->get();
        $categoryData = Category::get();
        $this->refreshDB();
        return view('admin.adminPostPage',compact('data','categoryData','allData'));
    }


    //direct to update post page
    public function updatePostPage($id){
        $updatedData = post::where('id',$id)->first();
        $data = post::orderBy('created_at','desc')->paginate(4);
        return view('admin.adminPostUpdatePage',compact('updatedData','data'));
    }
    //create post
    public function create(Request $request){
        $this->postValidation($request);
        $data = $this->getPostRequest($request);
        $fileName = uniqid() . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$fileName);
        $data['image'] = $fileName;
        post::create($data);
        return back();
    }
    public function delete($id){
        post::where('id',$id)->delete();
        $this->refreshDB();
        return back();
    }
    public function createCategory(Request $request){
        $this->postValidation($request);
        $data = ['name'=> $request->name];
        dd($data);
        Category::create($data);
        return back();
    }

    private function refreshDB()
    {
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE `posts` SET `posts`.`id` = @count:= @count + 1;");
        DB::statement("ALTER TABLE `posts` AUTO_INCREMENT = 1;");
    }

    // post validation
    private function postValidation($request){
        Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ])->validate();
    }

    private function getPostRequest($request){
        return [
            'title'=> $request->title,
            'description'=> $request->description,
            'image'=> $request->image,
            'category_id'=>$request->category_id,
            'create_at'=> Carbon::now()
        ];
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = post::paginate(6);
        $categories = Category::get();
        return view('user.home',compact('data','categories'));
    }
    public function nonCdm(){
        return view('user.nonCdm');
    }
    public function details($id){

        $data = post::where('id',$id)->first();
        // dd($data);
        return  view('user.details',compact('data'));
    }
}

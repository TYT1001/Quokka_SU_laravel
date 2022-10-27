<?php

namespace App\Http\Controllers\Api;

use App\Models\Uni;
use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlackList;

class PostController extends Controller
{
    //http://localhost:8000/api/posts
    public function getPosts(){
        $data = post::get();
        return response()->json([
            'status' => 'success',
            'post' => $data
        ]);
    }
    //http://localhost:8000/api/university
    public function getUnis(){
        $data = Uni::get();
        return response()->json([
            'status' => 'success',
            'uni' => $data
        ]);
    }
    //http://localhost:8000/api/nonCdmList
    public function getNonCdmList(){
        $data = BlackList::get();
        return response()->json([
            'status' => 'success',
            'nonList' => $data
        ]);
    }
    public function getSelectedData(Request $request){
        if($request->selectName == 'all'){
            $data = post::get();
        }
        // $data = post::where('category_id',$request->selectName)->get();

        return response()->json([
            'status'=>'success',
            'data'=> $data,
        ]);
    }
}

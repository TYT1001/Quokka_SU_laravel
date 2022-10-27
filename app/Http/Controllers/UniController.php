<?php

namespace App\Http\Controllers;

use App\Models\Uni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniController extends Controller
{
    public function list(){
        $data = Uni::select('*')->when(request('key'),function($p){
            $key = request('key');
            $p->where('name','like','%'.$key.'%');
        })->paginate(10);
        return view('admin.university.uniPage',compact('data'));
    }
    public function create(Request $request){
        $this->validation($request);
        $data = $this->getData($request);
        Uni::create($data);
        return back();
    }
    public function delete($id){
        Uni::where('id',$id)->delete();
        return back();
    }
    private function validation($request)
    {
        Validator::make($request->all(),[
            'name'=>'required'
        ]);
    }
    private function getData($request){
        return [
            'name'=>$request->name
        ];
    }
}

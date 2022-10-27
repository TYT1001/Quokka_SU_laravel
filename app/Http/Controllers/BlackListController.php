<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Uni;

use App\Models\BlackList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BlackListPostRequest;

class BlackListController extends Controller
{
    public function list(){
        $data = BlackList::select('black_lists.*','unis.name as uni_name')
        ->leftJoin('unis','unis.id','black_lists.uni_id')
        ->when(request('key'),function($p){
            $key = request('key');
            $p->orWhere('name','like','%'.$key.'%')
            ->orWhere('occupation','like','%'.$key.'%')
            ->orWhere('year','like','%'.$key.'%')
            ->orWhere('uni_id','like','%'.$key.'%');
        })->orderBy('created_at','asc')->paginate(10);
        // dd($data);
        return view('admin.blackList.nonCdmPage',compact('data'));
    }
    public function updatePage($id){
        $data = BlackList::select('black_lists.*','unis.name as uni_name')
        ->leftJoin('unis','unis.id','black_lists.uni_id')
        ->paginate(10);
        $updatedData = BlackList::where('id',$id)->first();
        // dd($updatedData);
        $year = BlackList::pluck('year')->unique();
        $unis = Uni::get();
        return view('admin.blackList.nonCdmUpdatePage',compact('data','updatedData','unis','year'));
    }
    public function update(Request $request){
        // dd($request->all());
        $data = $this->getUpdatedData($request);
        // dd($data);
        BlackList::where('id',$request->updated_id)->update($data);
        return back();
    }
    public function create(BlackListPostRequest $request){

        $data = $this->getData($request);
        BlackList::create($data);
        return back();
    }
    public function delete($id){
        BlackList::where('id',$id)->delete();
        return back();
    }
    private function getData($request){
        return [
            'name'=>$request->name,
            'occupation'=>$request->occupation,
            'year'=>$request->year,
            'uni_id'=>$request->uni_id,
            'create_at'=>Carbon::now()
        ];
    }
    private function getUpdatedData($request){
        return [
            'name'=>$request->name,
            'occupation'=>$request->occupation,
            'year'=>$request->year,
            'uni_id'=>$request->uni_id,
            'updated_at'=>Carbon::now()
        ];
    }

}

<?php

namespace App\Http\Controllers\User;

use App\Models\Uni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlackList;

class UserBlackListController extends Controller
{
    public function nonCdmPage(){
        $unis = Uni::get();
        // dd($unis);
        return view('user.nonCdm',compact('unis'));
    }
    public function details($id){
        $data = BlackList::select('black_lists.*','unis.name as uni_name')->where('uni_id',$id)
        ->leftJoin('unis','unis.id','black_lists.uni_id')
        ->paginate(10);
        // dd($data);
        return view('user.nonCdmDetails',compact('data'));
    }
}

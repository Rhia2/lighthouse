<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KonnectLeader;
use Session;

class KonnectLeaderController extends Controller
{
    public function store(Request $request){
        $response = $this->preStore($request);
        Session::flash('leaderResponse', $response);
        return redirect('/konnectArea/add');
    }
    
    protected function preStore(Request $request){
       $this->validate($request, [
        'name' => 'required|max:100',
        'user_id' => 'required',
        ]);  
       if(KonnectLeader::create($request->all())){
            $response = 'successfully added';
       }else{
           $response = 'something went wrong, try again';
       }
       return $response;
    }

    public function show($id){
        $result = KonnectLeader::where('user_id', $id)->get();
        return $result;
    }
}

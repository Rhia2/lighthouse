<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KonnectCenter;
use Session;

class KonnectCenterController extends Controller
{
    //

    public function store(Request $request){
        $response = $this->create($request);
        Session::flash('centerResponse', $response);
        return redirect('/konnectArea/add');
    }
    
    protected function create(Request $request){
       if(KonnectCenter::create($request->all())){
           $response = 'successfully added';
       }else{
           $response = 'something went wrong, try again';
       }
       return $response;
    }
}
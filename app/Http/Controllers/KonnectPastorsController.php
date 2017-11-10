<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KonnectPastor;
use Session;

class KonnectPastorsController extends Controller
{
    //

    public function store(Request $request){
        $response = $this->preStore($request);
        Session::flash('pastorResponse', $response);
        return redirect('/konnectArea/add');
    }
    
    protected function preStore(Request $request){
       $this->validate($request, [
        'name' => 'required|max:100',
        'user_id' => 'required',
        ]);  
       if(KonnectPastor::create($request->all())){
            $response = 'successfully added';
       }else{
           $response = 'something went wrong, try again';
       }
       return $response;
    }

    public function show($id){
        $result = KonnectPastor::where('user_id', $id)->get();
        return $result;
    }

    public function destroy($id){
        $konnectPastor = KonnectPastor::find($id);
        $konnectPastor->delete();
        return response()->json(['success' => $konnectPastor->name." successfully deleted"]);
    }

    public function update(REquest $request, $id){
        $konnectPastor = KonnectPastor::find($id);
        $konnectPastor->update($request->all());
        return response()->json(['success' => "Successfully updated"]);
    }
}

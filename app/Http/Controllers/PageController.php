<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataset;

class PageController extends Controller
{
    //
    function create(){
        return view('registration');
    }
    public function createsub(Request $req)
    {
    	$this->validate($req,
    		[
    	        "name"=>"required|max:10|min:3",
                //"id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                //"dob"=>"required",
                "email"=>"required|",
               // "nid"=>"required|",
                //"mbn"=>"required|",
                "password"=>"required|min:4"
                //"confirm_password"=>"required|min:4|same:password"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
    	 $var=new Dataset();

        //$var->mobille=$req->mobille;
        $var->name=$req->name;
       // $var->c_id=$req->id;
        $var->email=$req->email;
        //$var->nid=$req->nid;
        //$var->mbn=$req->mbn;
        $var->password=$req->password;
        //$var->confirm_password=$req->confirm_password;
        //$var->email=$req->email;
        $var->save();
    	return redirect()->route('log in');

         
    }
    public function list()
    {    //$names= array("kazi","hasn","raihan" );
      $coustomers=Dataset::all();

         return view('list')->with('coustomers',$coustomers);
    }
    public function editsubmit(Request $req){    
    //$names= array("kazi","hasn","raihan" );
       //$name="Student $id";
        //$dob ="4456";
          $id=$req->id;
          $var=Dataset::where('id',$id)->first();
        return view('listt')->with('var',$var);
        
        //->with('dob',$dob);

   }
    function login(){
        return view('login');
    }
    function dashboard(){
        return view('dashboard');
    }
    public function loginsub(Request $req)
    {    //$names= array("kazi","hasn","raihan" );
       $this->validate($req,
    		[
    	        //"name"=>"required|max:10|min:3",
                //"id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                //"dob"=>"required",
                "email"=>"required|",
               // "nid"=>"required|",
                //"mbn"=>"required|",
                "password"=>"required|min:4"
                //"confirm_password"=>"required|min:4|same:password"
            ]);

      //$coustomers=Dataset::all();
       $h= $req->email;
       $ss=$req->password;

      //return $coustomers->email;
       $coustomers=Dataset::all();

      //return $coustomers->email;

      foreach ($coustomers as $st) {
      	if($st->email==$h && $st->password==$ss)
      	{
      		return redirect()->route('dashb');
      	}
      else{
      	 return redirect()->route('hello');
      }
}
      	

      

      	/*if ($st->email=$h && $st->password=$ss) {
      	return redirect()->route('listsubmit');
      }
      else
         {
         	return redirect()->route('hello');
         }
      	
      }*/
      
         
    }
}

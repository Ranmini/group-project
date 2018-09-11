<?php

namespace App\Http\Controllers;

use App\User; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;


class UserController extends Controller
{
    public function RegisterUser(Request $request){


    //input validation

    $validatedData = $request->validate([
    'name' => 'required|min:3|max:50',
    'pwd' => 'required|confirmed|min:6',
]);


    	$table =new User();

    	//name = $request->(name);
    	//nic = $request->(nic);
    	//email = $request->(email);
    	//pwd = bcrypt($request->(pwd));
        //cpwd = bcrypt($request->(cpwd));

       $user = User::create(request(['name','nic', 'email', 'pwd']));

    	//$table->save();
    	return redirect()-> back()->with('message','Successfully registered');
        

    }

    public function LoginUser(Request $request){

        
        $email = $request->input('email');
        $pwd = $request->input('pwd');

        $checkLogin=DB:: table('users')-> where(['email'=>$email,'pwd'=>$pwd])->get();

        if(count($checkLogin)>0){
            echo "login success";
           
        }
        else
        {
            echo "login fail";
        }
    }
}

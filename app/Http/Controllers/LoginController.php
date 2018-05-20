<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class LoginController extends Controller
{
    //
    public function index(){
        return view('Manager.index');
    }
    public function login_manager(Request $request){
        // return view('Manager/index');
        $userName = $request -> user_name;
        $pass = md5($request -> pass);
        $result = DB::table('users')
        ->where('userName', $userName)
        ->where('password', $pass)
        ->first(); 

        if($result){
            Session::put('userName',$result->userName);
            Session::put('phone',$result->phone);
            Session::put('id',$result->id);
            return Redirect::to('/index');
        }else{
            Session::put('exception','Invalid User name or password');
            return Redirect::to('/');
        }

        // print_r($result);
    }
}

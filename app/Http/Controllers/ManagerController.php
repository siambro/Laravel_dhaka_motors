<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();
class ManagerController extends Controller
{
    //Sale 
    public function saleMotorcycle(){
        return view('Manager.saleMotorcycle');
    }

    public function sale_m(Request $req){

        // $data=array();
        // $data['user_id']=1;
        
        // DB::table('stock')->insert($data);

        $data=array();
        $data['phone']=$req->phone;
        $data['name']=$req->name;
        $data['email']=$req->email;
        $data['nid']=$req->nid;
        // $data['chassisNo']=$req->chassisNo;
        // $data['cc']=$req->cc;
        // $data['color']=$req->color;
        // $data['price']=$req->price;
        // $data['stock_id']= 1;

        
        DB::table('customer')->insert($data);

        Session::put('message','Successfully added!');
        return Redirect::to('/saleMotorcycle');
    }
    
    public function view_motorcycle(){
       // return view('Admin.stockMotorcycle');
        $all_motorcycle=DB::table('motorcycle_stock')
        // ->where(['cc'=>160])
        ->get();
        $manage=view('Manager.saleMotorcycle')->with('all_motorcycle_info', $all_motorcycle);
        return view('Manager.layouts.manager')->with('allmotorcycle',$manage);

    }

    //sale parts
    public function saleParts(){
        return view('Manager.saleParts');
    }

    public function sale_p(Request $req){

        // $data=array();
        // $data['user_id']=1;
        
        // DB::table('stock')->insert($data);

        $data=array();

        $data['id']=$req->p_id;
        $data['quantity']=$req->quantity;
        // $data['email']=$req->email;
        // $data['nid']=$req->nid;
        // $data['chassisNo']=$req->chassisNo;
        // $data['cc']=$req->cc;
        // $data['color']=$req->color;
        // $data['price']=$req->price;
        // $data['stock_id']= 1;
        
         echo "</pre>";
         print_r($data);
         echo "</pre>";
        
        // DB::table('customer')->insert($data);

        // Session::put('message','Successfully added!');
        // return Redirect::to('/saleParts');
    }
    
    public function view_parts(){
       // return view('Admin.stockMotorcycle');
        $all_parts=DB::table('parts_stock')
        // ->where(['cc'=>160])
        ->get();
        $manage=view('Manager.saleParts')->with('all_parts_info', $all_parts);
        return view('Manager.layouts.manager')->with('allparts',$manage);

    }
}

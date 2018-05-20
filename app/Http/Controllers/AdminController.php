<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class AdminController extends Controller
{
    //
    public function stockMotorcycle(){
        return view('Admin.stockMotorcycle');
    }

    public function stock_m(Request $req){

        $data=array();
        $data['user_id']=1;
        
        DB::table('stock')->insert($data);

        $data=array();
        $data['type']=$req->m_type;
        $data['name']=$req->m_name;
        $data['model']=$req->m_model;
        $data['engineNo']=$req->engineNo;
        $data['chassisNo']=$req->chassisNo;
        $data['cc']=$req->cc;
        $data['color']=$req->color;
        $data['price']=$req->price;
        $data['stock_id']= 1;

        
        DB::table('motorcycle_stock')->insert($data);

        Session::put('message','Successfully added!');
        return Redirect::to('/stockMotorcycle');
    }
    
    public function view_stockMotorcycle(){
       // return view('Admin.stockMotorcycle');
        $all_motorcycle=DB::table('motorcycle_stock')
        // ->where(['cc'=>160])
        ->get();
        $manage=view('Admin.stockMotorcycle')->with('all_motorcycle_info', $all_motorcycle);
        return view('Admin.layouts.admin')->with('allmotorcycle',$manage);

    }
    
    //Parts
    public function stockParts(){
        return view('Admin.stockParts');
    }

    public function stock_p(Request $req){

        $data=array();
        $data['user_id']=1;
        
        DB::table('stock')->insert($data);

        $data=array();
        $data['type']=$req->type;
        $data['name']=$req->name;
        $data['price']=$req->u_price;
        $data['quantity']=$req->quantity;
        
        $data['stock_id']= 1;

        
        DB::table('parts_stock')->insert($data);

        Session::put('message','Successfully added Parts!');
        return Redirect::to('/stockParts');
    }
    
    public function view_stockParts(){
       // return view('Admin.stockMotorcycle');
        $all_parts=DB::table('parts_stock')
        // ->where(['cc'=>160])
        ->get();
        $manage=view('Admin.stockParts')->with('all_parts_info', $all_parts);
        return view('Admin.layouts.admin')->with('allparts',$manage);

    }





}

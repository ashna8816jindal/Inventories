<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\customertable;
use App\producttable;
use App\purchasetable;
use App\salestable;

use DB;
use Illuminate\Support\Facades\Input;

class inventorycontroller extends Controller
{
    public function customer()
    {
    	return view('customer');
    }
    public function insertcustomer(Request $request)
    {
    	$data = new customertable;
    	/*$data->cid = request->input('id');*/
    	$data->cname = $request->input('cname');
    	$data->cphnno = $request->input('cphnno');
    	$data->save();

    	$customer= customertable::all();
    	return view('displaycustomer',['customer'=>$customer]);

    	/*return redirect('/')->with('info','saved');*/
    }
     public function showproduct()
     {
     	return view('product');
     }
   	 public function insertproduct(Request $request)
    {
    	$data = new producttable;
    	/*$data->cid = request->input('id');*/
    	$data->pname = $request->input('pname');
    	$data->cost = $request->input('pcost');
    	$data->quantity = $request->input('pquant');

    	$data->save();
    	return redirect('/product')->with('info','saved');
    } 
    public function showpurchase(Request $request)
    {
    	/*return view('purchase');*/
    	$producttable=producttable::all();
    	return view('purchase',compact('producttable'));
    }
    public function insertpurchase(Request $request)
    {
    	$data = new purchasetable;
    	/*$data->cid = request->input('id');*/
    	$data->pid = $request->input('id');
    	$data->quantity = $request->input('quantity');

    	$data->save();

    	DB::table('producttables')
    	->where('id',Input::get('id'))
    	->increment('quantity',Input::get('quantity'));



    	return redirect('/purchase')->with('info','saved');
    }

    public function sales( Request $request)
    {
    	$producttable=producttable::all();
    	$customertable =customertable::all();
    	return view('sales',compact('producttable','customertable'));
    	
    }
    public function insertsales(Request $request)
    {	
    /*	$request->validate(['quanity'=>'required']);*/
    	

    	$data= new salestable;
    	$data->cid = $request->input('id');
    	$data->pid = $request->input('pid');
    	$data->quantity = $request->input('quantity');
    	$data->save();

    	DB::table('producttables')
    	->where('id',Input::get('pid'))
    	->decrement('quantity',Input::get('quantity'));





    	return redirect('/sales')->with('info','saved');
    }

    public function delete1()
    {
    	return redirect('/insertcustomer')->with('info','Deleted!!');
    }
    public function delete($id)
    {	
    	  $biodata = customertable::find($id);
        $biodata->delete();
        delete1();
        /*return redirect('/')->with('info','Deleted!!');*/

    /*	customertable::where('id',$id)->delete();
    	redirect('/insertcustomer');*/
    }
    public function edit($id)
    {	$data=customertable::find($id);
    	return view('editcustomer',compact('data'));
    }
    public function updatecustomer($value='')
    {
    	
    }

}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\VendorModel;

class VendorController extends Controller
{
    public function index(){
    	$data['vendors']=VendorModel::all();

    	return view('admin.vendor-list',$data);
    }

    public function add_vendor(Request $request){

    	if($request->isMethod('post')){
    		$data=[
    			'name'=>$request->name,
    			'code'=>$request->code,
    			'firm'=>$request->firm,
    			'status'=>$request->status,
    		];


    		$output=VendorModel::create($data);

    		if($output->id){
    			return redirect()->route('vendor-list')->with('success', 'sucessfully created Vendor');
    		}else
    		{
    			return redirect()->route('vendor-list')->with('error', 'Whoops something went wrong');
    		}
    	}else{
    		return view('admin.add-vendor');   
    	}
    }


    public function edit_vendor(Request $request){

    	if($request->isMethod('post')){
    		$data=[
    		'name'=>$request->name,
    		'code'=>$request->code,
    		'firm'=>$request->firm,
    		'status'=>$request->status,
    		];

    		$result=VendorModel::where('id',$request->id)->update($data);
    		if($result){
    			return redirect()->route('vendor-list')->with('success', 'sucessfully created Vendor');
    		}
    		else{
    			return redirect()->route('vendor-list')->with('error', 'Whoops something went wrong');
    		}

    	}else
    	{
    		$data=VendorModel::find($request->id);

    		return view('admin.edit-vendor',$data);
    	}
    }

    
}

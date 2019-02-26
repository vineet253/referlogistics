<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\CustomerModel;

class CustomerController extends Controller
{
    public function index(){
    	 $data['customers']=CustomerModel::all();
       return view('admin.customer-list', $data);
    }

    public function add_customer(Request $request){
    	if($request->isMethod('post')){
    			  	

    		$data=[
    			'name'=>$request->name,
    			'code'=>$request->code,
    			'firm'=>$request->firm,
    			'status'=>$request->status,
    		];
    	
        
    		$output=CustomerModel::create($data);

    		if($output->id){
    			return redirect()->route('customer-list')->with('success', 'sucessfully created Customer');
    		}else{
    			return redirect()->route('customer-list')->with('error', 'Whoops something went wrong');
    		}
    	}
    	else
    	{
    	  return view('admin.add-customer');
    	}
    	

    }

    public function edit_customer(Request $request){
    	if($request->isMethod('post')){
    	    $data=[
    			'name'=>$request->name,
    			'code'=>$request->code,
    			'firm'=>$request->firm,
    			'status'=>$request->status,
    		]; 
    		$result=CustomerModel::where('id',$request->id)->update($data);
    		if($result){
    			return redirect()->route('customer-list')->with('success', 'sucessfully updated Customer');
    		}else{
    			return redirect()->route('customer-list')->with('error', 'Whoops something went wrong');
    		} 	
    	}
    	else
    		{
    			$data=CustomerModel::find($request->id);

    			return view('admin.edit-customer',$data);
    		} 	
    }


    public function delete_customer(Request $request){

    	$delete=CustomerModel::destroy($request->id);
            if($delete){
            	 	return redirect()->route('customer-list')->with('success', 'sucessfully updated Customer');
                    
                }else{
                	return redirect()->route('customer-list')->with('error', 'Whoops something went wrong');
                     
                }
    	
    }




}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\BranchModel;

class BranchController extends Controller
{
    public function index(){
    	$data['branchs']=BranchModel::all();

    	return view('admin.branch-list',$data);
    }

    public function add_branch(Request $request){

    	if($request->isMethod('post')){ 
    	   
    	   $data=[
    	   	    'branch_name'=>$request->branch_name,
    			'branch_code'=>$request->branch_code,
    			'status'=>$request->status,
    	   ];

    	   $output = BranchModel::create($data);

    	   if($output->id){

    	   	return redirect()->route('branch-list')->with('success', 'sucessfully created Branch');
    	   }
    	   else{

    	   	return redirect()->route('branch-list')->with('error', 'Whoops something went wrong');
    	   }
    	}
    	else{
    		return view('admin.add-branch');
    	}
    }


    public function edit_branch(Request $request){

    	if($request->isMethod('post')){

    		$data=[
    	   	    'branch_name'=>$request->branch_name,
    			'branch_code'=>$request->branch_code,
    			'status'=>$request->status,
    		];

    		$result=BranchModel::where('id', $request->id)->update($data);
    		if($result){
    			return redirect()->route('branch-list')->with('success', 'sucessfully created Branch');
    		}else{
    			return redirect()->route('branch-list')->with('error', 'Whoops something went wrong');
    		}
    	}else{

    		$data=BranchModel::find($request->id);

    		return view('admin.edit-branch',$data);
    	}
    }
}

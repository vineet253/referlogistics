<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\CustomerModel;
use App\Http\Model\admin\VendorModel;
use App\Http\Model\admin\TrackModel;
use App\Http\Model\admin\BranchModel;
use App\Http\Model\admin\DocketModel;

class AjaxController extends Controller
{
    public function delete_customer(Request $request){

    	$delete=CustomerModel::destroy($request->id);
            if($delete){
            	 	return response()->json(['success' => true, 'msg' => 'sucessfully deleted Customer','status'=>200]);
                    
                }else{
                	 return response()->json(['success' => false, 'msg' =>'Whoops something went wrong','status'=>402 ]);
                     
                }
    	
    }
    public function delete_vendor(Request $request){

	    $delete=VendorModel::destroy($request->id);
	        if($delete){
	              return response()->json(['success' => true, 'msg' => 'sucessfully deleted Vendor','status'=>200]);
	                    
	         }else{
	               return response()->json(['success' => false, 'msg' =>'Whoops something went wrong','status'=>402 ]);
	                     
	        }
    	
    }

    public function delete_track(Request $request){

        $delete=TrackModel::destroy($request->id);
            if($delete){
                  return response()->json(['success' => true, 'msg' => 'sucessfully deleted Docket','status'=>200]);
                        
             }else{
                   return response()->json(['success' => false, 'msg' =>'Whoops something went wrong','status'=>402 ]);
                         
            }
        
    }

    public function delete_branch(Request $request){

        $delete=BranchModel::destroy($request->id);
            if($delete){
                return response()->json(['success' => true, 'msg' => 'sucessfully deleted Branch','status'=>200]);
            }else{
                return response()->json(['success' => false, 'msg' =>'Whoops something went wrong','status'=>402 ]);
            }
    }

}

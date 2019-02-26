<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\TrackModel;

class TrackController extends Controller
{
    public function index()
    {
    	$data['tracks']=TrackModel::all();

    	return view('admin.track-list',$data);
    }

    public function add_track(Request $request){

    	if($request->isMethod('post')){

    		$data=[
                'pdo'=>$request->pdo,
                'docket_no'=>$request->docket_no,
                'enter_date'=>$request->enter_date,
                'pickup_date'=>$request->pickup_date,
                'pickup_time'=>$request->pickup_time,
                'delivery_date'=>$request->delivery_date,  
                'client_name'=>$request->client_name, 
                'client_docket_no'=>$request->client_docket_no,
                'origin'=>$request->origin, 
                'pickup_location'=>$request->pickup_location, 
                'destination'=>$request->destination, 
                'payment_mode'=>$request->payment_mode, 
                'transport_mode'=>$request->transport_mode, 
                'rate_factors'=>$request->rate_factors, 
                'consignor_name'=>$request->consignor_name, 
                'consignor_address_one'=>$request->consignor_address_one, 
                'consignor_address_two'=>$request->consignor_address_two, 
                'consignor_address_pin'=>$request->consignor_address_pin, 
                'consignor_phone'=>$request->consignor_phone, 
                'consignor_email'=>$request->consignor_email, 
                'consignor_tin'=>$request->consignor_tin, 
                'consignee_name'=>$request->consignee_name, 
                'consignee_address_one'=>$request->consignee_address_one, 
                'consignee_address_two'=>$request->consignee_address_two, 
                'consignee_address_pin'=>$request->consignee_address_pin, 
                'consignee_phone'=>$request->consignee_phone, 
                'consignee_email'=>$request->consignee_email, 
                'consignee_tin'=>$request->consignee_tin, 
                'risk_details'=>$request->risk_details, 
                'insurance'=>$request->insurance, 
                'rate'=>$request->rate, 
                'pvt_marks'=>$request->pvt_marks, 
                'cod_noncod'=>$request->cod_noncod, 
                'cod_amount'=>$request->cod_amount, 
                'status'=>$request->status,

    		];

    		$output=TrackModel::create($data);
    		// echo "<pre>";
    		// print_r($output);
    		// die;

    		if($output->id){
    			return redirect()->route('track-list')->with('success', 'sucessfully created Track');
    		}else{
    			return redirect()->route('track-list')->with('error', 'Whoops something went wrong');
    		}
    	}else{
    		return view('admin.add-track'); 
    	}
    }

    public function edit_track(Request $request){

    	if($request->isMethod('post')){
    		$data=[
                'pdo'=>$request->pdo,
                'docket_no'=>$request->docket_no,
                'enter_date'=>$request->enter_date,
                'pickup_date'=>$request->pickup_date,
                'pickup_time'=>$request->pickup_time,
                'delivery_date'=>$request->delivery_date,  
                'client_name'=>$request->client_name, 
                'client_docket_no'=>$request->client_docket_no,
                'origin'=>$request->origin, 
                'pickup_location'=>$request->pickup_location, 
                'destination'=>$request->destination, 
                'payment_mode'=>$request->payment_mode, 
                'transport_mode'=>$request->transport_mode, 
                'rate_factors'=>$request->rate_factors, 
                'consignor_name'=>$request->consignor_name, 
                'consignor_address_one'=>$request->consignor_address_one, 
                'consignor_address_two'=>$request->consignor_address_two, 
                'consignor_address_pin'=>$request->consignor_address_pin, 
                'consignor_phone'=>$request->consignor_phone, 
                'consignor_email'=>$request->consignor_email, 
                'consignor_tin'=>$request->consignor_tin, 
                'consignee_name'=>$request->consignee_name, 
                'consignee_address_one'=>$request->consignee_address_one, 
                'consignee_address_two'=>$request->consignee_address_two, 
                'consignee_address_pin'=>$request->consignee_address_pin, 
                'consignee_phone'=>$request->consignee_phone, 
                'consignee_email'=>$request->consignee_email, 
                'consignee_tin'=>$request->consignee_tin, 
                'risk_details'=>$request->risk_details, 
                'insurance'=>$request->insurance, 
                'rate'=>$request->rate, 
                'pvt_marks'=>$request->pvt_marks, 
                'cod_noncod'=>$request->cod_noncod, 
                'cod_amount'=>$request->cod_amount, 
                'status'=>$request->status,

    		];
    		$result=TrackModel::where('id',$request->id)->update($data);
    		if($result){
    			return redirect()->route('track-list')->with('success', 'sucessfully created Docket');  			
    		}else{
    			return redirect()->route('track-list')->with('error', 'Whoops something went wrong');

    		}
    	}else{
    		$data=TrackModel::find($request->id);
    		return view('admin.edit-track',$data);
    	}
    }


    public function delete_docket(Request $request){

    	$delete=TrackModel::destroy($request->id);
            if($delete){
            	 	return redirect()->route('track-list')->with('success', 'sucessfully updated Docket');
                    
                }else{
                	return redirect()->route('track-list')->with('error', 'Whoops something went wrong');
                     
                }
    	
    }


}

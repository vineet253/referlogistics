<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\BranchModel;
use App\Http\Model\admin\DocketModel;

class DocketController extends Controller
{
    public function index()
    {
    	
    	//$data['branchs']=BranchModel::all();
    	//$data['dockets']=BranchModel::all();

    	return view('admin.docket-list',$data);

    	
    }

}

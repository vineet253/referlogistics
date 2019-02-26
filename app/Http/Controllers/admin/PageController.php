<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\admin\PageModel;

class PageController extends Controller
{
    public function index(){
    	$data['pages']=PageModel::all();

    	return view('admin.page-list', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.add-category');
    }

    public function add_category(Request $request)
    {
    	$data=array();

    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
    	DB::table('tbl_category')
    	    ->insert($data);
    	

        Session::flash('add-category','Category Added Successfully .');
        return Redirect(route('add.category'));

    }
}

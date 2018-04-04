<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index()
   {
   	return view('front.firstpage');
   }

   public function our_team()
   {
   	return view('front.ourteam');
   }

   public function all_course()
   {
     	return view('front.all_courses');
   }

    public function blog()
   {
     	return view('front.all_courses');
   }

    public function contact_us()
   {
     	return view('front.all_courses');
   }
}

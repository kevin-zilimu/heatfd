<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
     $title = 'Welcome to LaraVel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contactus');
    }
}

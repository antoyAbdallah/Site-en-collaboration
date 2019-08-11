<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function abdallah(){
        return view('abdallah');
    }

     public function news(){
        return view('news');
    }

     public function economie(){
        return view('economie');
    }

     public function histoire(){
        return view('histoire');
    }

     public function education(){
        return view('education');
    }

     public function contact(){
        return view('contact');
    }

     public function profile(){
        return view('profile');
    }
}

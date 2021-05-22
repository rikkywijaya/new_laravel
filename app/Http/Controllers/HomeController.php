<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home0262");
    }
    public function artikel(){
        return view("artikel0262");
    }
    public function contact(){
        return view("contact0262");
    }
}
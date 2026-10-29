<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private array $styles = ["curr"=>"text-blue-600 font-semibold border-b-2 border-blue-600 pb-1", "defulte" => "text-gray-600 hover:text-blue-600 font-medium transition-colors"];
    public function index(){
        return view("index");
    }
    public function about(){
        return view("about", ["title"=>"About Page"]);
    }
    public function contact(){
        return view("contact", ["title"=>"Contact Page"]);
    }
}

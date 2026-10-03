<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $data = Job::get_all();
        return view("job/index", ["jobs"=>$data, "name"=>"Ahmed"]);
    }
}

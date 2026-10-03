<?php

namespace App\Models;



class Job 
{
    public static function get_all(){
        return [
            ["title" => "Software Engineer", "salary" => "$1000"],
            ["title" => "Data Engineer", "salary" => "$2000"],
        ];
    }
}

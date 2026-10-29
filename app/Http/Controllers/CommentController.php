<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        // Eloquent ORM -> Get all data
        $data = Comment::all();
        // Pass the data to the view
        return view("comment/index", ["comments"=>$data, "title"=>"Comments"]);
    }

    public function create(){
        // Comment::create([
        //     "author" => "Yehia",
        //     "content" => "Codex is the best ai agent.",
        //     "post_id" => 8
        // ]);

        Comment::factory(5)->create();

        return redirect("/comments");
    }
}

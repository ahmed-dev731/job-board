<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // Eloquent ORM -> Get all data
        $data = Post::paginate(5);
        // Pass the data to the view
        return view("post/index", ["posts"=>$data, "title"=>"Blog"]);
    }

    public function show(string $id){
        $post = Post::findOrFail($id);
        return view("post/show", ["post"=>$post, "title"=>$post->title]);
    }

    public function create(){
        // Post::create([
        //     "title"=>"what is chatgpt work",
        //     "body"=>"ChatGPT is a conversational artificial intelligence (AI) chatbot developed by OpenAI. It uses large language models to understand text, voice, and image prompts and generate human-like responses.",
        //     "author"=>"Ali",
        //     "published"=>true
        // ]);

        Post::factory(20)->create();

        return redirect("/blog");
    }

    public function delete(string $id){
        Post::destroy($id);
        return redirect("/blog");
    }
}

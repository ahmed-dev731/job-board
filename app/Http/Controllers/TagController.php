<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        // Eloquent ORM -> Get all data
        $data = Tag::all();
        // Pass the data to the view
        return view("tag/index", ["tags"=>$data, "title"=>"Tags"]);
    }

    

    public function create(){
        Tag::create([
            "title"=>"Web development",
        ]);

        return redirect("/tags");
    }

    public function testManyToMany(){
        // $post_3 = Post::find(3);
        // $post_4 = Post::find(4);

        // $post_3->tags()->attach([1,2]);
        // $post_4->tags()->attach([2]);

        // return response()->json([
        //     "post_3" => $post_3->tags,
        //     "post_4" => $post_4->tags
        // ]);

        $tag = Tag::find("01a186be-bd48-7017-9d5f-94a0261e4146");
        $tag->posts()->attach(["4a3c108e-337b-4fcd-a121-0f5e8c7d7c35"]);
        return response()->json([
            "tag" => $tag->title,
            "posts" => $tag->posts
        ]);
    }

    public function displayAllTags(){
        $tags = Tag::all();
        $arr = [];
        foreach($tags as $tag){
            $arr[] = [
                "tag" => $tag->title,
                "posts" => $tag->posts
            ];
        }
        
        return response()->json($arr);
    }
}

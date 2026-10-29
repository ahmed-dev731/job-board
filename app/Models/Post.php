<?php

namespace App\Models;


use App\Models\Comment;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // UUID 
    public $incrementing = false;
    protected $table = "post";
    protected $fillable = ["title", "body", "author" ,"published"]; // fields that can be updated
    
    protected $guarded = ["id"];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, "post_tag");
    }
}

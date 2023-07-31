<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
  {
      return $post->get();
  }
  
  public function create(Category $category)
  {
      return view('posts.create')->with(['categories' => $category->get()]);
  }
}

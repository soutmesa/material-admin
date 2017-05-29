<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databases\Post;
use App\Databases\Category;
use App\Databases\Tag;
use Auth;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(10);
    	return view('admin.posts.index', compact(['posts'=>$posts]));
    }

    public function edit($id)
    {
    	$post = Post::findOrFail($id);
    	return view('admin.posts.edit', compact(['post'=>$post]));
    }

    public function create()
    {

    	return view('admin.posts.create');
    }
}

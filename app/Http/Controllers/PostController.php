<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databases\Post;
use App\Databases\Category;
use App\Databases\Tag;
use Auth;
use App\Databases\User;

class PostController extends Controller
{
    public function index($pagin=null)
    {
    	$posts = Post::paginate(10);
        
    	return view( 'admin.posts.index', ['posts'=>$posts] );
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

    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = $data['title'];

        $auth = User::findOrFail(Auth::id());

        $post = Post::create($data);

        $post->authenticated()->attach($auth);

        return redirect('posts')->withMessage('Post has been created successfully!!!');
    }
}

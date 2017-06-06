<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databases\Post;
use App\Databases\Category;
use App\Databases\Tag;
use App\Databases\User;
use Auth;

class PostController extends Controller
{
    public function index($trashed=null)
    {
        if( isset($trashed) && $trashed == "trashed"){
            $posts = Post::onlyTrashed()->paginate(10);
        }else{
            $posts = Post::paginate(10);
        }

        $count_trashed = count( Post::onlyTrashed()->get() );

        $count_published = count( Post::get() );
        
    	return view( 'admin.posts.index', ['posts'=>$posts, 'trashed'=>$count_trashed, 'published'=>$count_published] );
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

        return redirect('posts/status-post=all')->withMessage('Post has been created successfully!!!');
    }

    public function destroy($id,$act=null)
    { 
        $post = Post::findOrFail($id);

        if($act == "trash")
        {
            $post->delete();
        }else
        {
            $post->forceDelete();
        }

        return redirect('posts/status-post=all')->withMessage('Post has been deleted !!!');
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->where('id', '=', $id)->get()->first();
            
        $post->restore();

        return redirect('posts/status-post=all')->withMessage('Post has been restored !!!');
    }
}

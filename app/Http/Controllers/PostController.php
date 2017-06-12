<?php

namespace App\Http\Controllers;

use App\Repositories\Post\PostRepository;
use Illuminate\Http\Request;
use App\Databases\Post;
use App\Databases\Category;
use App\Databases\Tag;
use App\Databases\User;
use Auth;

class PostController extends Controller
{
    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index($trashed=null)
    {
        $posts = $this->post->getAll($trashed);
        $count_trashed = count($this->post->getAll("trashed"));
        $count_published = count($this->post->getAll(""));
    	return view('admin.posts.index', ['posts'=>$posts, 'trashed'=>$count_trashed, 'published'=>$count_published]);
    }

    public function edit($id)
    {
    	$post = $this->post->getById($id, "");
        $categories = Category::get();
        $tags = Tag::get();
    	return view('admin.posts.edit', compact('post','categories','tags'));
    }

    public function create()
    {
    	return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $this->post->create($request);

        return redirect('posts/status-post=all')->withMessage('Post has been created successfully!!!');
    }

    public function update($id, Request $request)
    {
        $this->post->update($id, $request);

        return redirect('posts/status-post=all')->withMessage('Post has been updated successfully!!!');
    }

    public function destroy($id,$act=null)
    { 
        $callBack = $this->post->delete($id, $act);

        return redirect('posts/status-post=all')->withMessage('Post has been deleted !!!');
    }

    public function restore($id)
    {
        $this->post->restore($id);

        return redirect('posts/status-post=all')->withMessage('Post has been restored !!!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databases\Category;
use App\Databases\Post;

class FrontEndController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->select('id', 'name')->get();
        $posts = Post::orderBy('created_at', 'desc')->select('id', 'title', 'created_at')->paginate(5);
        return view('frontend.index', compact('categories', 'posts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function allPosts()
    {
        return view('frontend.posts');
    }

    public function singlePost()
    {
        return view('frontend.single');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

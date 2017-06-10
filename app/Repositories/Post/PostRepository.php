<?php

namespace App\Repositories\Post;

use App\Repositories\Post\PostInterface;
use App\Databases\Post;
use App\Databases\User;
use Auth;

class PostRepository implements PostInterface
{
    public $post;

    private $upload_dir = 'public/uploads/files';

    function __construct(Post $post) {
        $this->post = $post;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $posts = $this->post->onlyTrashed()->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $posts = $this->post->get();
        }else{
            $posts = $this->post->paginate(10);
        }

        return $posts;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return$this->post->onlyTrashed()->where('id', '=', $id)->get()->first();
        }

        return $this->post->findOrFail($id);
    }

    public function create($datas)
    {
        $post = $this->post->create($this->getRequest($datas));

        if($datas->has('tags')){
            $post->tags()->attach($datas['tags']);
        }
        if($datas->has('categories')){
            $post->categories()->attach($datas['categories']);
        }

        $post->authenticated()->attach(Auth::id());

        return $post;
    }

    public function update($id, $tmp)
    {
        $datas = $tmp->all();
        $this->getById($id, "")->update($datas);

        if($tmp->has('tags')){
            $this->post->tags()->sync($datas['tags']);
        }
        if($tmp->has('categories')){
            $this->post->categories()->sync($datas['categories']);
        }

        return $this->post;
    }

    public function delete($id, $opt)
    {
        $post = $this->getById($id, $opt);
        if($opt == "trash"){
            $post->delete();
        }else{
            $post->forceDelete();
            $post->authenticated()->detach(Auth::id());
        }
        
        return true;
    }

    public function restore($id)
    {
        $post = $this->post->onlyTrashed()->where('id', '=', $id)->get()->first();

        return $post->restore();
    }

    private function getRequest($request)
    {
        $datas = $request->all();
        
        $datas['user_id'] = 1;

        if($request->has('title'))
        {
            $datas['slug'] = $datas['title'];
        }

        if ($request->hasFile('profile'))
        {
            $photo = $request->file('profile');
            $ext = $photo->getClientOriginalExtension();
            $fileName    = strtolower(preg_replace('/\s/i', '-', $datas['title'])) . '.' . $ext;
            $destination = $this->upload_dir;
            $photo->move($destination, $fileName);
            $datas['profile'] = $fileName;
        }

        return $datas;
    }
}
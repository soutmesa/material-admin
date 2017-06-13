<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Tag\TagRepository;

class TagController extends Controller
{
    public function __construct(TagRepository $tag)
    {
        $this->tag = $tag;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($opt=null)
    {
        $tags = $this->tag->getAll($opt);
        $trashed = count($this->tag->getAll("trashed"));
        $published = count($this->tag->getAll(""));
        return view('admin.tags.index', compact('tags', 'trashed', 'published'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->tag->create($request);
        return redirect('tags/status-tag=all')->withMessage('Tag has been created successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = $this->tag->getById($id, '');
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->tag->update($id, $request);
        return redirect('tags/status-tag=all')->withMessage('Tag has been updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$act=null)
    { 
        $this->tag->delete($id, $act);
        return redirect('tags/status-tag=all')->withMessage('Tag has been deleted !!!');
    }

    public function restore($id)
    {
        $this->tag->restore($id);
        return redirect('tags/status-tag=all')->withMessage('Tag has been restored !!!');
    }
}
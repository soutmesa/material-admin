<?php

namespace App\Http\Controllers;

use App\Databases\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Requests\TagRequest;
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
    public function index($opt=null, Request $request)
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
    public function store(TagRequest $request)
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
    public function update($id, TagUpdateRequest $request)
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
    public function destroy($id,$act=null, $trashed=null, Request $request=null)
    {
        if(isset($request) && count($request->all()) > 0){
            $ids = isset($request->all()['ids'][0])?$request->all()['ids'][0]:'0';
            $ids = explode(',',$ids);
            $this->tag->delete($ids, $act, $trashed);
        }else{
            $this->tag->delete($id, $act, $trashed);
        }
        return redirect('tags/status-tag=all')->withMessage('Tag has been deleted !!!');
    }

    public function restore($id, Request $request=null)
    {
        if(isset($request) && count($request->all()) > 0 ){
            $ids = isset($request->all()['ids'][0])?$request->all()['ids'][0]:'0';
            $ids = explode(',',$ids);
            $this->tag->restore($ids);
        }else{
            $this->tag->restore($id);
        }
        return redirect('tags/status-tag=all')->withMessage('Tag has been restored !!!');
    }

    private function MultiSoftDeletes($items)
    {
        foreach($items as $item){
            $tag = Tag::findOrFail($item);
            $tag->delete();
        }
        return redirect()->back()->with('msg', "La  a été supprimée");
    }

    private function MultiForceDeletes($items)
    {
        foreach($items as $item){
            $tag = Tag::withTrashed()->findOrFail($item);
            $tag->forceDelete();
        }
        return redirect()->back()->with('msg', "La a été supprimée");
    }

    private function MultiRestores($items)
    {
        foreach($items as $item){
            $tag = Tag::onlyTrashed()->findOrFail($item);
            $tag->restore();
        }
        return redirect()->back()->with('msg', "Les ont été restaurées");
    }
}

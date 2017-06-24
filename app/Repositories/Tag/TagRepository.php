<?php

namespace App\Repositories\Tag;

use App\Repositories\Tag\TagInterface;
use App\Databases\Tag;
use Auth;

class TagRepository implements TagInterface
{
    public $tag;

    function __construct(Tag $tag) {
        $this->tag = $tag;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $tags = $this->tag->onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $tags = $this->tag->orderBy('created_at', 'desc')->get();
        }else{
            $tags = $this->tag->orderBy('created_at', 'desc')->paginate(10);
        }
        return $tags;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return$this->tag->onlyTrashed()->where('id', '=', $id)->get()->first();
        }
        return $this->tag->findOrFail($id);
    }

    public function create($datas)
    {
        $this->tag = $this->tag->create($datas->all());
        $this->tag->authenticated()->attach(Auth::id());
        return $this->tag;
    }

    public function update($id, $datas)
    {
        $this->getById($id, '')->update($datas->all());
        return $this->tag;
    }

    public function delete($id, $opt)
    {
        if(is_array($id)){
            foreach($id as $i){
                if($opt == "trash"){
                    $tag = $this->getById($i, "");
                    $tag->delete();
                }else{
                    $tag = $this->getById($i, "");
                    $tag->forceDelete();
                    $tag->authenticated()->detach(Auth::id());
                }
            }
        }else{
            $tag = $this->getById($id, $opt);
            if($opt == "trash"){
                $tag->delete();
            }else{
                $tag->forceDelete();
                $tag->authenticated()->detach(Auth::id());
            }
        }

        return true;
    }

    public function restore($id)
    {
        if(is_array($id)){
            foreach($id as $i){
                $tag = $this->getById($i, "force");
                $tag->restore();
            }
        }else{
            $tag = $this->getById($id, 'force');
            $tag->restore();
        }
        return true;
    }
}
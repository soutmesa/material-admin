<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryInterface;
use App\Databases\Category;
use Auth;

class CategoryRepository implements CategoryInterface
{
    public $category;

    function __construct(Category $category) {
        $this->category = $category;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $categories = $this->category->onlyTrashed()->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $categories = $this->category->get();
        }else{
            $categories = $this->category->orderBy('created_at', 'desc')->paginate(10);
        }
        return $categories;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return$this->category->onlyTrashed()->where('id', '=', $id)->get()->first();
        }
        return $this->category->findOrFail($id);
    }

    public function create($datas)
    {
        $this->category = $this->category->create($datas->all());
        $this->category->authenticated()->attach(Auth::id());
        return $this->category;
    }

    public function update($id, $datas)
    {
        $this->getById($id, '')->update($datas->all());
        return $this->category;
    }

    public function delete($id, $opt)
    {
        $category = $this->getById($id, $opt);
        if($opt == "trash"){
            $category->delete();
        }else{
            $category->forceDelete();
            $category->authenticated()->detach(Auth::id());
        }
        return true;
    }

    public function restore($id)
    {
        $category = $this->getById($id, 'force');
        return $category->restore();
    }
}
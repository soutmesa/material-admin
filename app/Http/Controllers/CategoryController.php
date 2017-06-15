<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index($opt)
    {
    	$categories = $this->category->getAll($opt);
        $count_trashed = count($this->category->getAll("trashed"));
        $count_published = count($this->category->getAll(""));
        return view('admin.categories.index', ['categories'=>$categories, 'trashed'=>$count_trashed, 'published'=>$count_published]);
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
    	$this->category->create($request);
    	return redirect('categories/status-cate=all')->withMessage('Category has been created successfully!!!');
    }

    public function edit($id)
    {
    	$category = $this->category->getById($id, '');
    	return view('admin.categories.edit', compact('category'));
    }

    public function update($id, CategoryUpdateRequest $request)
    {
    	$this->category->update($id, $request);
    	return redirect('categories/status-cate=all')->withMessage('Category has been updated successfully!!!');
    }

    public function destroy($id,$act=null)
    { 
        $this->category->delete($id, $act);
        return redirect('categories/status-cate=all')->withMessage('Category has been deleted !!!');
    }

    public function restore($id)
    {
        $this->category->restore($id);
        return redirect('categories/status-cate=all')->withMessage('Category has been restored !!!');
    }
}

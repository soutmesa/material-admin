<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryInterface;
use App\Databases\Category;

class CategoryRepository implements CategoryInterface
{
    public $category;

    function __construct(Category $category) {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->get();
    }

    public function getById($id)
    {
        return $this->category->findById($id);
    }

    public function create(array $datas)
    {
        return $this->category->create($datas);
    }

    public function update($id, array $datas)
    {
        $category = $this->category->findOrFail(id);
        $category->category->update($datas);
        return $category;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}
<?php

namespace App\Repositories\Category;

interface CategoryInterface
{

    public function getAll($opt);

    public function getById($id, $opt);

    public function create($datas);

    public function update($id, $datas);

    public function delete($id, $opt);
}
<?php

namespace App\Repositories\Post;

interface PostInterface
{

    public function getAll($opt);

    public function getById($id, $opt);

    public function create($datas);

    public function update($id, $datas);

    public function delete($id, $opt);

    public function restore($id);
}
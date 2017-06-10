<?php

namespace App\Repositories\Tag;

interface TagInterface
{

    public function getAll();

    public function getById($id);

    public function create(array $datas);

    public function update($id, array $datas);

    public function delete($id);
}
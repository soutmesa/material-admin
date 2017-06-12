<?php

namespace App\Repositories;

interface Interface
{
    public function getAll($opt);

    public function getById($id);

    public function create($datas);

    public function update($id, $datas);

    public function delete($id);

}
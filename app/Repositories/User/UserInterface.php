<?php

namespace App\Repositories\User;

interface UserInterface
{

    public function getAll($opt);

    public function getById($id, $opt);

    public function create($datas);

    public function update($id, $datas);

    public function delete($id, $opt);
}
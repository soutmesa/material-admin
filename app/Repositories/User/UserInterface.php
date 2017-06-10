<?php

namespace App\Repositories\User;

interface UserInterface
{

    public function getAll();

    public function getById($id);

    public function create(array $datas);

    public function update($id, array $datas);

    public function delete($id);
}
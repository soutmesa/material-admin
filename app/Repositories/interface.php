<?php

namespace App\Repositories;

interface Interface {

    public function getAll();

    public function find($id);

    public function delete($id);
}
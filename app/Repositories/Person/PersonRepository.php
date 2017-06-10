<?php

namespace App\Repositories\Person;

use App\Repositories\Person\PersonInterface;
use App\Databases\Person;

class PersonRepository implements PersonInterface
{
    public $person;

    function __construct(Person $person) {
        $this->person = $person;
    }

    public function getAll()
    {
        return $this->person->get();
    }

    public function getById($id)
    {
        return $this->person->findById($id);
    }

    public function create(array $datas)
    {
        return $this->person->create($datas);
    }

    public function update($id, array $datas)
    {
        $person = $this->person->findOrFail(id);
        $person->person->update($datas);
        return $person;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}
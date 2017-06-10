<?php

namespace App\Repositories\Tag;

use App\Repositories\Tag\TagInterface;
use App\Databases\Tag;

class TagRepository implements TagInterface
{
    public $user;

    function __construct(Tag $user) {
        $this->tag = $tag;
    }

    public function getAll()
    {
        return $this->tag->get();
    }

    public function getById($id)
    {
        return $this->tag->findById($id);
    }

    public function create(array $datas)
    {
        return $this->tag->create($datas);
    }

    public function update($id, array $datas)
    {
        $tag = $this->tag->findOrFail(id);
        $tag->tag->update($datas);
        return $tag;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}
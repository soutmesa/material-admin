<?php

namespace App\Repositories\Comment;

use App\Repositories\Comment\CommentInterface;
use App\Databases\Comment;

class CommentRepository implements CommentInterface
{
    public $comment;

    function __construct(Comment $comment) {
        $this->comment = $comment;
    }

    public function getAll()
    {
        return $this->comment->get();
    }

    public function getById($id)
    {
        return $this->comment->findById($id);
    }

    public function create(array $datas)
    {
        return $this->comment->create($datas);
    }

    public function update($id, array $datas)
    {
        $comment = $this->comment->findOrFail(id);
        $comment->comment->update($datas);
        return $comment;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}
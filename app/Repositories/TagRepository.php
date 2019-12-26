<?php

namespace App\Repositories;
use App\Constracts\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository extends Repository implements TagRepositoryInterface
{
    /**
     * Construct TagRepository Injection Model Tag
     * 
     * @param Product $model
     */
    public function __construct(Tag $model)
    {
        $this->model = $model;
    }

    /**
     * @Override ${`all`} method in Repository
     * 
     * @return Tag
     */
    public function all(array $select = ['*']) {
        return $this->model->select($select)->cursor();
    }
}

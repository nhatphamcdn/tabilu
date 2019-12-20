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
     * @Override ${`create`} method in Repository
     * 
     * @param array $data
     * @param $id
     * 
     * @return Product
     */
    public function create(array $data)
    {
        // dd($this->model);
        dd($data);
    }
}

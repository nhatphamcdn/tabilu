<?php

namespace App\Repositories;

use App\Constracts\RepositoriesInterface;

class Repository implements RepositoriesInterface
{
    /**
     * @var
     */
    protected $model;

    /**
     * Constructor Repository Class.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Implement interface ${`Get all items`}.
     *
     * @param array $select
     *
     * return LazyCollection
     */
    public function all(array $select = ['*'])
    {
        return $this->model->select($select)->get();
    }

    /**
     * Implement interface ${`Get paginate`}.
     */
    public function paginate($pageNumber = 10)
    {
        return $this->model->paginate($pageNumber);
    }

    /**
     * Implement interface ${`Get a item by ID`}.
     *
     * @param $id
     *
     * @return Collection or fails
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Implement interface ${`Create data`}.
     *
     * @param array $data
     *
     * @return Collection
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Implement interface ${`Update Data by ID`}.
     *
     * @param array $data
     * @param $id
     *
     * @return Collection
     */
    public function update(array $data, $id)
    {
        $result = $this->model->findOrFail($id);

        if ($result) {
            return $result->update($data);
        }
    }

    /**
     * Implement interface ${`Delete a item by ID`}.
     *
     * @param $id
     */
    public function delete($id)
    {
        $result = $this->model->findOrFail($id);

        if ($result) {
            return $result->delete($id);
        }
    }
}

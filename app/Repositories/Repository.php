<?php

namespace App\Repositories;

use App\Constracts\RepositoriesInterface;

class Repository implements RepositoriesInterface
{
    /**
     * @var $model
     */
    protected $model;

    /**
     * Constructor Repository Class
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Implement interface ${`Get all items`}
     */
    public function all() {
        return $this->model->cursor();
    }

    /**
     * Implement interface ${`Get a item by ID`}
     * 
     * @param $id
     * 
     * @return Collection or null
     */
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Implement interface ${`Create data`}
     * 
     * @param array $data
     * 
     * @return Collection
     */
    public function create(array $data) {
        return $this->model->create($data);
    }
    
    /**
     * Implement interface ${`Update Data by ID`}
     * 
     * @param array $data
     * @param $id
     * 
     * @return Collection
     */
    public function update(array $data, $id)
    {
        $result = $this->model->findOrFail($id);

        if($result) {
            return $result->update($data);
        }

        return null;
    }

    /**
     * Implement interface ${`Delete a item by ID`}
     * 
     * @param $id
     */
    public function delete($id)
    {
        $result = $this->model->findOrFail($id);

        if($result) {
            return $result->delete($id);
        }

        return null;
    }
}

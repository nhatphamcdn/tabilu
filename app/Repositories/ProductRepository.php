<?php

namespace App\Repositories;
use App\Constracts\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * Construct ProductRpository Injection Model Product
     * 
     * @param Product $model
     */
    public function __construct(Product $model)
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

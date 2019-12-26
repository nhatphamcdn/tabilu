<?php

namespace App\Constracts;

interface ProductRepositoryInterface
{
    /**
     * Create data
     * 
     * @param array $data
     * 
     * @return Collection
     */
    public function create(array $data);
}

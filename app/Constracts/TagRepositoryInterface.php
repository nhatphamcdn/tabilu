<?php

namespace App\Constracts;

interface TagRepositoryInterface
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

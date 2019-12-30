<?php

namespace App\Constracts;

interface ProductRepositoryInterface
{
    /**
     * Create data.
     *
     * @param array $data
     *
     * @return Collection
     */
    public function create(array $data);

    /**
     * Update data
     * 
     * @param array $data
     * @param $id
     * 
     * @return Collection
     */
    public function update(array $data, $id);

    /**
     * Get data with trash
     * 
     * @return Collection
     */
    public function trashedGet();

    /**
     * Restore a product
     * 
     * @return Collection
     */
    public function restoreId($id);
}

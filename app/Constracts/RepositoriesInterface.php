<?php

namespace App\Constracts;

interface RepositoriesInterface
{
    /**
     * Get all items.
     */
    public function all();

    /**
     * Get a item by ID.
     *
     * @param $id
     *
     * @return Collection or null
     */
    public function show($id);

    /**
     * Create data.
     *
     * @param array $data
     *
     * @return Collection
     */
    public function create(array $data);

    /**
     * Update Data by ID.
     *
     * @param array $data
     * @param $id
     *
     * @return Collection
     */
    public function update(array $data, $id);

    /**
     * Delete a item by ID.
     *
     * @param $id
     */
    public function delete($id);
}

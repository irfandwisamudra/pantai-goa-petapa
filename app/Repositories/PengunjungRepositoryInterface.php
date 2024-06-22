<?php

namespace App\Repositories;

interface PengunjungRepositoryInterface
{
    /**
     * Get all pengunjung interface
     */
    public function getPengunjungAll();

    /**
     * Get pengunjung by uuid interface
     *
     * @param string $id

     */
    public function getPengunjungByUuid($id);

    /**
     * Get pengunjung where interface
     *
     * @param string $column
     * @param string $value
     */
    public function getPengunjungWhere($column, $value);

    /**
     * Create pengunjung interface
     *
     * @param array $data
     */
    public function createPengunjung($data);

    /**
     * Update pengunjung interface
     *
     * @param array $data
     * @param string $uuid
     */
    public function updatePengunjung($data, $uuid);

    /**
     * Delete pengunjung interface
     *
     * @param string $id
     */
    public function deletePengunjung($id);
}

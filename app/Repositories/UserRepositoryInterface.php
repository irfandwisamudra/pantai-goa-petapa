<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Get all user interface
     */
    public function getUserAll();

    /**
     * Get user by uuid interface
     *
     * @param string $id

     */
    public function getUserByUuid($id);

    /**
     * Get user where interface
     *
     * @param string $column
     * @param string $value
     */
    public function getUserWhere($column, $value);

    /**
     * Create user interface
     *
     * @param array $data
     */
    public function createUser($data);

    /**
     * Update user interface
     *
     * @param array $data
     * @param string $uuid
     */
    public function updateUser($data, $uuid);

    /**
     * Delete user interface
     *
     * @param string $id
     */
    public function deleteUser($id);
}

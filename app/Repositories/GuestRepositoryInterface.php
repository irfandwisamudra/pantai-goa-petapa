<?php

namespace App\Repositories;

interface GuestRepositoryInterface
{
    /**
     * Get all guest interface
     */
    public function getGuestAll();

    /**
     * Get guest by uuid interface
     *
     * @param string $id

     */
    public function getGuestByUuid($uuid);

    /**
     * Get guest where interface
     *
     * @param string $column
     * @param string $value
     */
    public function getGuestWhere($column, $value);

    /**
     * Create guest interface
     *
     * @param array $data
     */
    public function createGuest($data);

    /**
     * Update guest interface
     *
     * @param array $data
     * @param string $uuid
     */
    public function updateGuest($data, $uuid);

    /**
     * Delete guest interface
     *
     * @param string $uuid
     */
    public function deleteGuest($uuid);
}

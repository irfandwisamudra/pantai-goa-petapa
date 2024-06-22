<?php

namespace App\Repositories;

interface KendaraanRepositoryInterface
{
    public function getKendaraanAll();

    public function getKendaraanByUuid($uuid);

    public function getKendaraanWhere($column, $value);

    public function createKendaraan($data);

    public function updateKendaraan($data, $uuid);

    public function deleteKendaraan($uuid);
}

<?php

namespace App\Repositories;

interface TiketRepositoryInterface
{
    public function getTiketAll();

    public function getTiketByUuid($uuid);

    public function getTiketWhere($column, $value);

    public function createTiket($data);

    public function updateTiket($data, $uuid);

    public function deleteTiket($uuid);
}

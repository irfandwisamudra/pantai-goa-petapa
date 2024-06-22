<?php

namespace App\Repositories;

interface TransaksiTiketRepositoryInterface
{
    public function getTransaksiTiketAll();

    public function getTransaksiTiketByUuid($uuid);

    public function getTransaksiTiketWhere($column, $value);

    public function createTransaksiTiket($data);

    public function updateTransaksiTiket($data, $uuid);

    public function deleteTransaksiTiket($uuid);
}

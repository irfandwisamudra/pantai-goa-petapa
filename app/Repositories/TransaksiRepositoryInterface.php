<?php

namespace App\Repositories;

interface TransaksiRepositoryInterface
{
    public function getTransaksiAll();

    public function getTransaksiByUuid($uuid);

    public function getTransaksiWhere($column, $value);

    public function createTransaksi($data);

    public function updateTransaksi($data, $uuid);

    public function deleteTransaksi($uuid);
}
